<?php
class example extends CI_Controller 
{
	public function __construct()
    {
       	parent::__construct();
        $this->load->helper('url_helper');
    }

    public function index() 
    { 
    	//Load session library 
        $this->load->library('session'); 
        $this->load->helper('url'); 

        $this->session->set_flashdata('error_id', 'U bent nog niet ingelogd');//message rendered
    	$this->session->set_flashdata('seconds_redirect', 5);//time to be redirected (in seconds)
    	$this->session->set_flashdata('url_redirect', base_url('pages/home'));//url to be redirected

    	$this->load->view('templates/header', $data);
        $this->load->view('example');
        $this->load->view('templates/footer', $data);

    	redirect('pages/home');
    }
}