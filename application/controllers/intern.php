<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 05-Sep-17
 * Time: 11:56 AM
 */
class intern extends CI_Controller{

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

        if(isset($_SESSION['role']) && $_SESSION['role'] == 4)
        {
            redirect('WelcomeAdmin', 'Refresh');
        }
    }
    /** het vullen van forum pagina */
    public function index(){

        $this->load->view('templates/header_inside');
        $this->load->view('intern');
        $this->load->view('templates/footer_inside');
    }
}