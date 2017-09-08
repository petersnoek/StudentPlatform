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

		$this->load->view('templates/header', $data);
		$this->load->view('forums/view', $data);
		$this->load->view('templates/footer');
    }
}