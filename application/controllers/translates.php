<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Translates extends Base_Controller {

    public function __construct() {
	parent::__construct();
	$this->breadcrumbs->push('<i class="icon-text-height"></i> Translates', 'translates');
	$this->data['navigation_panel'] = $this->actions->navigation_panel(true);
	$this->data['search_panel'] = $this->actions->search_panel(true);
    }

    public function index() {
	$this->load->view($this->tpl, $this->data);
    }

    public function create() {
	$this->breadcrumbs->push('Create', current_url());
	$this->data['submit_form'] = $this->actions->form_submit_panel();
	$this->load->view($this->tpl, $this->data);
    }

}
