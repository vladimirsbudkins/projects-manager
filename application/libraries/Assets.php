<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Assets {

    public $css = array();
    public $js = array();
    public $assets_path = 'assets/';

    public function __construct() {
	
    }

    public function add() {
	$args = current(func_get_args());
	foreach (array_keys($args) as $key) {
	    if (property_exists(__CLASS__, $key)) {
		$this->{$key} = array_merge((array) $this->{$key}, (array) $args[$key]);
	    }
	}
    }

    public function css() {
	foreach ($this->css as $css) {
	    if (preg_match('%^((https?://)|(www\.))([a-z0-9-].?)+(:[0-9]+)?(/.*)?$%i', $css)) {
		echo "<link href='" . $css . "' rel='stylesheet'>" . PHP_EOL;
	    } else {
		echo "<link href='" . base_url($this->assets_path . $css) . "' rel='stylesheet'>" . PHP_EOL;
	    }
	}
    }

    public function js() {
	foreach ($this->js as $js) {
	    if (preg_match('%^((https?://)|(www\.))([a-z0-9-].?)+(:[0-9]+)?(/.*)?$%i', $js)) {
		echo "<script src='" . $js . "' ></script>" . PHP_EOL;
	    } else {
		echo "<script src='" . base_url($this->assets_path . $js) . "' ></script>" . PHP_EOL;
	    }
	}
    }

}
