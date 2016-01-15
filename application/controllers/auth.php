<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends Base_Controller {

    public function __construct() {
	parent::__construct();
	$this->tpl = 'auth';
	$this->load->model('auth_model');
    }
    
    public function index() {
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
	redirect('auth');
    }

}
