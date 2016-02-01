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

    public function __construct() {
	
    }

}
