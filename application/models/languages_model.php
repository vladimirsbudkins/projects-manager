<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Languages_model extends MY_Model {

    protected $table_name = 'languages';
    protected $return_insert_id = true;
    protected $return_type = 'object';
    protected $soft_deletes = false;
    protected $set_created = false;
    protected $set_modified = false;
    protected $key = 'id';
    protected $validation_rules = [
	['field' => 'lang_edit', 'label' => 'Lang key', 'rules' => 'required|exact_length[2]|callback__not_unique_self|xss_clean'],
	['field' => 'lang', 'label' => 'Lang key', 'rules' => 'required|exact_length[2]|is_unique[languages.lang]|xss_clean'],
	['field' => 'title', 'label' => 'Lang title', 'rules' => 'required|xss_clean'],
	['field' => 'status', 'label' => 'Status', 'rules' => 'required|xss_clean'],
	['field' => 'default', 'label' => 'Default', 'rules' => 'xss_clean'],
    ];
    public $cache_file = 'languages';

    public function __construct() {
	parent::__construct();
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

    public function prep_data($post_data) {
	return [
	    'lang' => isset($post_data['lang']) ? $post_data['lang'] : $post_data['lang_edit'],
	    'title' => $post_data['title'],
	    'status' => $post_data['status'] ? true : false,
	    'default' => isset($post_data['default']) ? true : false,
	    'img' => isset($post_data['img']) ? $post_data['img'] : null,
	];
    }

}
