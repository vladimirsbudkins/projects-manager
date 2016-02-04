<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Error extends Base_Controller {
    
    public function __construct() {
	parent::__construct();
    }

    public function error_404() {
	$this->output->set_status_header('404');
	$this->breadcrumbs->push('<i class="icon-sitemap"></i>  404 Page Not Found', current_url());
	$this->data['page_title'] = '404 Page Not Found';
	$this->load->view($this->tpl, $this->data);
    }

}
