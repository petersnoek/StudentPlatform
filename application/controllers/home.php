<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 05-Sep-17
 * Time: 11:56 AM
 */
class home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['user_logged'])){
            $this->session->set_flashdata('ERROR','U moet eerst aanmelden voordat u toegang krijgt tot deze pagina!');
            redirect('login');
        }
    }

    public function index(){

        $this->load->view('home');
    }
}