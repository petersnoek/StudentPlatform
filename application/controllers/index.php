<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 05-Sep-17
 * Time: 16:45 AM
 */
class index extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        }


    public function index(){

        $data['pageTitle'] = 'Your page title';
        $this->load->view('templates/header');
        $this->load->view('index');
        $this->load->view('templates/footer');
    }
}