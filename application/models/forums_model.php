<?php

class forums_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

   	public function get_forum($id = '')
   	{
   		$query = $this->db->get_where('forums', array('id' => $id));
   		return $query->row_array();
   	}

    public function create_forum()
    {
        $this->load->helper('url');

        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'creator' => $this->input->post('creator'),
            'create_date_time' => $this->input->post('date_time')
        );

        return $this->db->insert('forums', $data);
    }

    public function create_comment()
    {
        $this->load->helper('url'); 

        $data = array(
          'forum_id' => $this->input->post('forum_id'),
          'username' => $this->input->post('username'),
          'date_time_reaction' => $this->input->post('date_time_reaction'),
          'description' => $this->input->post('description')
        );

        return $this->db->insert('forum_reactions', $data);
    }

    public function get_comments_from_forum($id = '')
    {
        $query = $this->db->get_where('forum_reactions', array('forum_id' => $id));
        return $query->result_array();
    }
}