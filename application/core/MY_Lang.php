<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Lang extends CI_Lang {

    //active languages keys
    public $languages = array();
    //active languages full data
    public $languages_data = array();
    //all languages keys
    public $all_languages = array();
    //all languages full data
    public $all_languages_data = array();
    //default site language
    public $def_lang;
    public $ci;

    public function __construct() {
	parent::__construct();
    }

    public function init() {
	$this->ci = & get_instance();
	$result = $this->ci->languages_model->find_all();
	if ($result) {
	    foreach ($result as $key => $value) {
		if ($value->status) {
		    $this->languages[$value->lang] = $value->lang;
		    $this->languages_data[] = $value;
		}
		if ($value->default) {
		    $this->def_lang = $value->lang;
		}
		$this->all_languages_data[] = $value;
		$this->all_languages[$value->lang] = $value->lang;
	    }
	}
    }

}
