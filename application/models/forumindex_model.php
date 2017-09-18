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

    public function get_num_comments($forum_id = '')
    {
        $query = $this->db->get_where('forum_reactions', array('forum_id' => '1'));
        return $query->result();
    }
}