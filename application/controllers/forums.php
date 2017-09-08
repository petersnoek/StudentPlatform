<?php

class forums extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function view($id = NULL)
    {
    	$this->load->model('forums_model');
    	$data['forum'] = $this->forums_model->get_forum($id);

		if (empty($data['forum']))
		{
		    $this->session->set_flashdata('ERROR','De aangeklikte forum kan niet gevonden worden!');
		    redirect('inside', 'Refresh');
		}

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'creator');
		$this->form_validation->set_rules('Date_time', 'create_date_time');
		$this->form_validation->set_rules('comment', 'description');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header_inside', $data);
			$this->load->view('forums/view', $data);
			$this->load->view('templates/footer_inside');
		}
    }

    public function create()
    {
    	$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('description', 'description', 'required');
		$this->form_validation->set_rules('creator', 'creator', 'required');
		$this->form_validation->set_rules('date_time', 'create_date_time', 'required');
		

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header_inside');
			$this->load->view('forums/create');
			$this->load->view('templates/footer_inside');
		}
		else
		{
			$this->load->model('forums_model');
		    $this->forums_model->create_forum();
		    redirect('inside', 'refresh');
		}
    }
}