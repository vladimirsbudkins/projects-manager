<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth_model extends MY_Model {

    protected $table_name = 'users';
    protected $return_insert_id = true;
    protected $return_type = 'object';
    protected $soft_deletes = false;
    protected $set_created = true;
    protected $set_modified = false;
    protected $validation_rules = [
	['field' => 'login_email', 'label' => 'Email', 'rules' => 'required|valid_email|xss_clean'],
	['field' => 'password', 'label' => 'Password', 'rules' => 'required|min_length[6]|xss_clean'],
	['field' => 'remember', 'label' => 'Remember me', 'rules' => 'xss_clean'],
    ];
    public $cookie_remember_code_name = 'remember_code';
    public $session_userdata_name = 'pm_user_data';
    public $user_data = [];

    public function __construct() {
	$this->is_remembered();
	$this->user_data = $this->get_userdata();
    }

    public function check_auth_data($email, $password) {
	//$password_hash = password_hash($password,PASSWORD_DEFAULT);
	$user_data = $this->find_by(['email' => $email]);
	$return = ['status' => false, 'msg' => null, 'user_data' => null];
	if ($user_data && password_verify($password, $user_data->password)) {
	    if ($user_data->activated) {
		if (!$user_data->banned) {
		    $return['user_data'] = (array) $user_data;
		    $return['status'] = true;
		    $return['user_data']['groups'] = $this->get_user_groups($user_data->id);
		} else {
		    $return['msg'] = 'You are banned';
		}
	    } else {
		$return['msg'] = 'You are not activated';
	    }
	} else {
	    $return['msg'] = 'Login/Password incorrect';
	}
	return $return;
    }

    public function get_user_groups($user_id) {
	$return = [];
	$result = $this->db->select('g.name')->join('groups g', 'ug.groups_id = g.id', 'left')->get_where('users_groups ug', ['users_id' => $user_id])->result();
	if ($result) {
	    foreach ($result as $value) {
		$return[] = $value->name;
	    }
	}
	return $return;
    }

    public function login($userdata, $remember = false) {
	if ($remember) {
	    $this->remember_user($userdata['id']);
	}
	$this->set_userdata($userdata);
    }

    public function remember_user($user_id) {
	$remember_code = uniqid();
	$this->update(['id' => $user_id], ['remember_code' => $remember_code]);
	$this->input->set_cookie($this->cookie_remember_code_name, $remember_code, 60 * 60 * 24 * 2);
    }

    public function is_logged() {
	return $this->user_data ? true : false;
    }

    public function get_userdata() {
	return $this->session->userdata($this->session_userdata_name);
    }
    
    public function set_userdata($userdata) {
	unset($userdata['password'],$userdata['remember_code'],$userdata['created'],$userdata['activated'],$userdata['banned'],$userdata['password_reset_code']);
	$this->session->set_userdata($this->session_userdata_name, $userdata);
    }

    public function is_remembered() {
	$remember_code = $this->input->cookie($this->cookie_remember_code_name);
	if (!$this->is_logged() && $remember_code) {
	    $user_data = $this->as_array()->find_by(['remember_code' => $remember_code]);
	    if ($user_data) {
		$user_data['groups'] = $this->get_user_groups($user_data['id']);
		$this->login((array) $user_data);
	    }
	}
    }

    public function logout() {
	$this->load->helper('cookie');
	$this->session->unset_userdata($this->session_userdata_name);
	delete_cookie($this->cookie_remember_code_name);
    }

}
