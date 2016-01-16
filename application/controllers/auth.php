<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends Base_Controller {

    public function __construct() {
	parent::__construct();
	$this->tpl = 'auth';
	$this->data['auth_error'] = $this->session->flashdata('auth_error');
    }
    
    public function index() {
	$post = $this->input->post();
	if ($post) {
	    $rules = $this->auth_model->get_custom_validation_rules(['login_email', 'password','remember']);
	    $this->form_validation->set_rules($rules);
	    if ($this->form_validation->run()) {
		$auth_data = $this->auth_model->check_auth_data($post['login_email'],$post['password']);
		if($auth_data['status']){
		    $this->auth_model->login($auth_data['user_data'],isset($post['remember'])?true:false);
		    redirect('/');
		}else{
		    $this->session->set_flashdata('auth_error', $auth_data['msg']);
		    redirect(current_url());
		}
	    }
	}
	//$this->assets->add(['js'=>['js/auth_index.js']]);
	$this->load->view($this->tpl, $this->data);
    }

    public function registration() {
	$this->load->view($this->tpl, $this->data);
    }
    
    public function forgot_password() {
	$this->load->view($this->tpl, $this->data);
    }
    
    public function logout() {
	$this->auth_model->logout();
	redirect('auth');
    }

}
