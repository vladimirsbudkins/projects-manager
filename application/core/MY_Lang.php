<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Lang extends CI_Lang {

    // active languages
    public $languages = array();
    //all active languages data
    public $languages_data = array();
    //will use for admin
    public $all_languages = array();
    //will use for admin
    public $all_languages_data = array();
    //default site language
    public $def_lang;
    public $ci;

    public function __construct() {
	parent::__construct();
	$this->init();
    }

    public function init() {
	require_once( BASEPATH . 'database/DB' . EXT );
	$db = & DB();
	$result = $db->get('languages')->result();
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
