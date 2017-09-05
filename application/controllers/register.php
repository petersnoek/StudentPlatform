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

			$data['title'] = 'Registratie';

			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('password', 'password', 'required|min_length[8]');
            $this->form_validation->set_rules('password2', 'password2', 'required|min_length[8]|matches[password]');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('leerling_nr', 'leerling_nr', 'required');
			$this->form_validation->set_rules('klas', 'klas', 'required');
			$this->form_validation->set_rules('geslacht', 'geslacht', 'required');
			$this->form_validation->set_rules('geboortedatum', 'geboortedatum', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this-> load->view('register', $data);
            }
            else
            {
                $this->load->model('register_model');
                $this->register_model->set_user();
                $this->session->set_flashdata("gelukt", "Uw account is aangemaakt.");
                redirect("register", "refresh");
        }
	}}