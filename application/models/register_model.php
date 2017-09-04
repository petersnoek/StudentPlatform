<?php
class register_model extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}
	
	public function set_user()
		{
			$this->load->helper('url');

			$data = array(
				'firstname' => $this->input->post('firstname'),
				'prefix' => $this->input->post('prefix'),
				'lastname' => $this->input->post('lastname'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
				'phone' => $this->input->post('phone'),
				'studentnumber' => $this->input->post('studentnumber')
			);

			return $this->db->insert('users', $data);
		}
	}