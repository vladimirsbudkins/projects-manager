<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Languages extends Base_Controller {

    public function __construct() {
	parent::__construct();
	$this->breadcrumbs->push('<i class="icon-flag"></i> Languages', 'languages');
    }

    public function index() {
	$this->data['records'] = $this->languages_model->find_all();
	//var_dump($this->data['records']);
	$this->load->view($this->tpl, $this->data);
    }

    public function create() {
	$this->breadcrumbs->push('Create', current_url());
	$this->load->view($this->tpl, $this->data);
    }

    public function update() {
	$id = $this->uri->rsegment(3);
	$data = $this->languages_model->find_by('id', $id);
	if ($id && $data) {
	    $this->breadcrumbs->push($data->title, current_url());
	    $this->load->view($this->tpl, $this->data);
	} else {
	    show_404();
	}
    }

}
