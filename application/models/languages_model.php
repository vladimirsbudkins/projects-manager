<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Languages_model extends MY_Model {

    protected $table_name = 'languages';
    protected $return_insert_id = true;
    protected $return_type = 'object';
    protected $soft_deletes = false;
    protected $set_created = true;
    protected $set_modified = false;
    protected $validation_rules = [];
    public $cache_file = 'languages';

    public function __construct() {
	
    }

    public function find_all() {
	$cache = $this->cache->file->get($this->cache_file);
	if (!$cache) {
	    $result = parent::find_all();
	    $this->cache->file->save($this->cache_file, $result, 1000000);
	    return $result;
	}
	return $cache;
    }

}
