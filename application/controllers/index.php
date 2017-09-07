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

        function dustin_bio(){
            echo "Student Applicatie ontwikkelaar,";
        }
        function romy_bio(){
            echo "Studente Applicatie ontwikkelaar";
        }
        function thomas_bio(){
            echo"student applicatie ontwikkelaar";
        }
        $data['pageTitle'] = 'Your page title';
        $this->load->view('templates/header');
        $this->load->view('index');
        $this->load->view('templates/footer');
    }


}