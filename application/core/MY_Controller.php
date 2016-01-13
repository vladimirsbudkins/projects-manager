<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Base_Controller extends CI_Controller {

    public $tpl = 'tpl';
    public $main_content;
    public $data;

    public function __construct() {
	parent::__construct();
	$this->main_content = $this->set_main_content();
	$css = ['css/bootstrap.min.css','css/font-awesome.min.css','http://fonts.googleapis.com/css?family=Open+Sans:400,300','css/ace.min.css','css/ace-rtl.min.css'];
	$js = [];
	$this->assets->add(['css'=>$css,'js'=>$js]);
    }

    public function set_main_content() {
	$view_path = $this->router->class . '/' . $this->router->method;
	$file_path = APPPATH . 'views/' . $view_path . EXT;
	return method_exists($this->router->class, $this->router->method) && file_exists($file_path) ? $view_path : 'error/error_404';
    }
    
    public function set_404($load_view = false) {
        $this->output->set_status_header('404');
        $this->main_content = 'error/error_404';
        if ($load_view){
	    $this->load->view($this->tpl, $this->data);
	}
            
    }

}