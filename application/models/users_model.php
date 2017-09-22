<?php

class users_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_users()
    {
    	$query = $this->db->get('users');

    	return $query->result_array();
    }

}