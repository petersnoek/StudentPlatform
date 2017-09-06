<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 05-Sep-17
 * Time: 11:56 AM
 */
class inside extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['user_logged'])){
            $this->session->set_flashdata('ERROR','U moet eerst aanmelden voordat u toegang krijgt tot deze pagina!');
            header("Refresh:5; URL=login");
        }
    }

    public function index(){
        $this->load->view('templates/header_inside');
        $this->load->view('inside');
        $this->load->view('templates/footer_inside');
    }
}