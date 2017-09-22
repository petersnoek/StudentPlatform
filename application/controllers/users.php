<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 08-Sep-17
 * Time: 3:13 PM
**/
class users extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('users_model');

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
    	$data['users'] = $this->users_model->get_users();

    	if(isset($data))
    	{
    		$this->load->view('templates/headerBackend');
        	$this->load->view('users', $data);
        	$this->load->view('templates/footerBackend');
    	}
    	else
    	{
    		$this->session->set_flashdata('ERROR', 'Er zijn geen gebruikers gevonden!');
    		redirect('management', 'Refresh');
    	}
    }

}