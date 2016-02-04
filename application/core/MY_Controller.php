<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Base_Controller extends CI_Controller {

    public $tpl = 'tpl';
    public $main_content;
    public $data;

    public function __construct() {
	parent::__construct();
	$this->load->driver('cache');
	$this->lang->init();
	$this->load->model(['auth_model']);
	if($this->router->class != 'auth' && !$this->auth_model->is_logged()){
	    redirect('auth'); 
	}
	$this->main_content = $this->set_main_content();
	$css = ['css/bootstrap.min.css','css/font-awesome.min.css','http://fonts.googleapis.com/css?family=Open+Sans:400,300','css/ace.min.css','css/ace-rtl.min.css','css/custom-ace.css'];
	$js = ['http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js','js/bootstrap.min.js','js/ace-elements.min.js','js/ace.min.js'];
	$this->assets->add(['css'=>$css,'js'=>$js]);
	$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
	$this->breadcrumbs->push('<i class="icon-dashboard"></i>  Home', '/');
	$this->data['page_title'] = 'Project Manager';
	$this->data['navigation_panel'] = $this->actions->navigation_panel();
	$this->data['search_panel'] = $this->actions->search_panel();
    }

    public function set_main_content() {
	$view_path = $this->router->class . '/' . $this->router->method;
	$file_path = APPPATH . 'views/' . $view_path . EXT;
	return method_exists($this->router->class, $this->router->method) && file_exists($file_path) ? $view_path : 'error/error_404';
    }
    
    public function set_404($load_view = false) {
        $this->output->set_status_header('404');
        $this->main_content = 'error/error_404';
	$this->breadcrumbs->push('<i class="icon-sitemap"></i>  404 Page Not Found', current_url());
	$this->data['page_title'] = '404 Page Not Found';
        if ($load_view){
	    $this->load->view($this->tpl, $this->data);
	}
    }

}
