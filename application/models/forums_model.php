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
}