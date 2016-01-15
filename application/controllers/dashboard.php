<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends Base_Controller {
    
    public function __construct() {
	parent::__construct();
    }

    public function index() {
	$this->load->view($this->tpl, $this->data);
    }

}
