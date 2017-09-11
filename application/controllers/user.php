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
        $this->load->model('user_model');
        $this->load->database();
    }
    public function Mijn_profiel(){
        $this->load->model('user_model');
        $data['user']=$this->user_model->recieve();

        $this->load->view('templates/header_inside');
        $this->load->view('users/Mijn_Profiel', $data);
        $this->load->view('templates/footer_inside');
    }
    public function  wijzig(){

        $this->load->model('user_model');
        $data['user']=$this->user_model->recieve();
        $this->load->view('templates/header_inside');
        $this->load->view('users/wijzig_profiel', $data);
        $this->load->view('templates/footer_inside');

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $this->user_model->send();
    }

}
}