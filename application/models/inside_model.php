<?php

class inside_model extends CI_Model{

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

    public function get_num_comments($forum_id = '')
    {
        $this->db->select();
        $this->db->from('forum_reactions');
        $this->db->where('forum_id', 1);

        $query = $this->db->get();

        return $query->num_rows();
    }
}