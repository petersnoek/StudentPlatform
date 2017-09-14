<?php

class forumindex_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_forums()
    {
        /** @var query haalt alles uit table forums */
    	$query = $this->db->get('forums');
    	return $query->result_array();
    }
}