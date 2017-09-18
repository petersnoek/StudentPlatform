<?php

class forums extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        if(!isset($_SESSION['user_logged'])){
            /** wanneer  gebruiker niet is ingelogt stuur naar studentplaza/login met session error */
            $this->session->set_flashdata('ERROR','U moet eerst aanmelden voordat u toegang krijgt tot deze pagina!');
            redirect('login', 'Refresh');
        }
    }

    public function view($id = NULL)
    {
    	//$this->session->set_flashdata('ERROR', 'entering function view()');

    	$this->load->model('forums_model');
    	$data['forum'] = $this->forums_model->get_forum($id);

		if (empty($data['forum']))
		{
		    $this->session->set_flashdata('ERROR','De aangeklikte forum kan niet gevonden worden!');
		    redirect('forum', 'Refresh');
		}

		$data['comments'] = $this->forums_model->get_comments_from_forum($id);

		if(empty($data['comments']))
		{
			$this->session->set_flashdata('ERROR', 'Er zijn geen reacties gevonden!');
		}

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('description', 'description');

		if ($this->form_validation->run() === FALSE)
		{
			//die('validation failed');
			$this->load->view('templates/header_inside', $data);
			$this->load->view('forums/view', $data);
			$this->load->view('templates/footer_inside');
		}
		else
		{
			//die('validation ok');
			$this->forums_model->create_comment();
			redirect('view', 'refresh');
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
		    redirect('forum', 'refresh');
		}
    }
}