<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth_model extends MY_Model {

    protected $table_name = 'users';
    protected $return_insert_id = TRUE;
    protected $return_type = 'object';
    protected $soft_deletes = FALSE;
    protected $set_created = FALSE;
    protected $set_modified = FALSE;
    protected $validation_rules = [];

}
