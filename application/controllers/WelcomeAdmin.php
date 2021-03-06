<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeAdmin extends CI_Controller {
	
	public function __construct()
    {

        parent::__construct();
        $this->load->helper('url_helper');
        /** controlleerd of niet is ingelogd. */
        if(!isset($_SESSION['user_logged'])){
            /** wanneer  gebruiker niet is ingelogt stuur naar studentplaza/login met session error */
            $this->session->set_flashdata('ERROR','U moet eerst aanmelden voordat u toegang krijgt tot deze pagina!');
            redirect('login', 'Refresh');
        }

        if(isset($_SESSION['role']) && $_SESSION['role'] != 4)
        {
        	$this->session->set_flashdata('ERROR', 'Verboden toegang!');
            redirect('intern', 'Refresh');
        }
    }

	public function index()
	{
		$this->load->view('templates/header_homepage_admin');
        $this->load->view('WelcomeAdmin');
        $this->load->view('templates/footerBackend');
	}
}