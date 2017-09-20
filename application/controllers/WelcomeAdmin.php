<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeAdmin extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/headerBackend');
        $this->load->view('WelcomeAdmin');
        $this->load->view('templates/footerBackend');
	}
}