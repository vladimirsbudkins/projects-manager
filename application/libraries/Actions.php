<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Actions {

    public function __construct() {
	
    }

    public function __get($var) {
	return get_instance()->$var;
    }

    public function form_submit_panel($save = true, $save_close = true, $save_create = true) {
	return $this->load->view('parts/form_submit', ['save' => $save, 'save_close' => $save_close, 'save_create' => $save_create], true);
    }

    public function navigation_panel($create = false, $settings = false) {
	return $this->load->view('parts/navigation_panel', ['create' => $create, 'settings' => $settings], true);
    }
    public function search_panel($serach = false) {
	return $this->load->view('parts/search_panel', ['search' => $serach], true);
    }
    

}
