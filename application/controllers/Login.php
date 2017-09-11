<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 04-Sep-17
 * Time: 5:35 PM
 */

class login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = 'Aanmelden';
/** controlleerd als username en password velden zijn gevuld */
        $this->form_validation->set_rules('username', 'gebruikersnaam', 'required');
        $this->form_validation->set_rules('password', 'wachtwoord', 'required');

/** als  1 of beide velden leeg is  geef fout melden voor legen velden */
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login', $data);
        }
        /** a;s beide velden gevuld zijn roep model functie check_user() aam */
        else {
            $this->load->model('login_model');
            $this->login_model->check_user();
        }
    }
}