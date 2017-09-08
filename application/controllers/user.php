<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 08-Sep-17
 * Time: 3:13 PM
**/
class user extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }
    public function Mijn_profiel(){
        $this->load->view('templates/header_inside');
        $this->load->view('Mijn_Profiel');
        $this->load->view('templates/footer_inside');
    }


}