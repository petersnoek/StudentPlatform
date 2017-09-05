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
    }

    public function index()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Aanmelden';

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login', $data);
        } else {
            $this->load->model('login_model');
            $this->login_model->check_user();
        }
    }
}