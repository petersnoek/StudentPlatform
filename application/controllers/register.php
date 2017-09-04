<?php
class register extends CI_Controller 
{

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url_helper');
        }

        public function index()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['title'] = 'Registreren';

			$this->form_validation->set_rules('firstname', 'firstname', 'required');
			$this->form_validation->set_rules('lastname', 'lastname', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');
			$this->form_validation->set_rules('phone', 'phone', 'required');
			$this->form_validation->set_rules('studentnumber', 'studentnumber', 'required');

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('register', $data);
			}
			else
			{
				$this->load->model('register_model');
				$this->register_model->set_user();
				$this->load->view('register');
			}
		}
	}