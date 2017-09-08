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
}