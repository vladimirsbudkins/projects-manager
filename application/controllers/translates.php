<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Translates extends Base_Controller {

    public function __construct() {
	parent::__construct();
	$this->breadcrumbs->push('<i class="icon-text-height"></i> Translates', 'translates');
    }

    public function index() {
	$this->load->view($this->tpl, $this->data);
    }

}
