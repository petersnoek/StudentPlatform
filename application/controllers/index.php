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
            echo "Student Applicatie ontwikkelaar <br>@ Da Vinci college.<br><br> <strong>Programmeertalen:</strong><br> HTML, CSS, PHP, SQL, JAVASCRIPT, JAVA <br><br> <strong>Droom:</strong><br>Een succesvol leven hebben samen met zijn vriendin.";
        }
        function romy_bio(){
            echo "Student Applicatie ontwikkelaar <br>@ Da Vinci college.<br><br>";
        }
        function thomas_bio(){
            echo"Student Applicatie ontwikkelaar <br>@ Da Vinci college.<br><br>";
        }
        $data['pageTitle'] = 'Your page title';
        $this->load->view('templates/header');
        $this->load->view('index');
        $this->load->view('templates/footer');
    }


}