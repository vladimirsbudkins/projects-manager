<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Languages extends Base_Controller {

    public function __construct() {
	parent::__construct();
	$this->breadcrumbs->push('<i class="icon-flag"></i> Languages', 'languages');
	$this->data['navigation_panel'] = $this->actions->navigation_panel(true);
    }

    public function index() {
	$this->data['records'] = $this->languages_model->find_all();
	$this->data['page_title'] = 'Languages';
	//var_dump($this->data['records']);
	$this->load->view($this->tpl, $this->data);
    }

    public function create() {
	$this->breadcrumbs->push('Create', current_url());
	$this->data['page_title'] = 'Create new language';
	$this->load->view($this->tpl, $this->data);
    }

    public function update() {
	$id = $this->uri->rsegment(3);
	$this->data['records'] = $id ? $this->languages_model->find_by('id', $id) : false;
	if ($this->data['records']) {
	    $this->data['page_title'] = 'Update languge ' . $this->data['records']->title;
	    $this->breadcrumbs->push($this->data['records']->title, current_url());
	    $this->data['submit_form'] = $this->actions->form_submit_panel();
	    //var_dump($this->data['records']);
	    $this->load->view($this->tpl, $this->data);
	} else {
	    $this->set_404(true);
	}
    }

}
