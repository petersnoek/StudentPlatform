<?php

class inside_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_forums()
    {
    	$query = $this->db->get('forums');
    	return $query->result_array();
    }
}