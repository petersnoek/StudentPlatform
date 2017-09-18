<?php
class register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    /** bij het laden van student register word de volgende code uitgevoerd */
    public function index()
    {

        $data['title'] = 'Registratie';
        /** form_validation checkt of elke veld is ingevuld */
        $this->form_validation->set_rules('username', 'username', 'required');
        /** password1 is verplicht en is verplicht met een minimale lengte van 8 karakters */
        $this->form_validation->set_rules('password', 'password', 'required|min_length[8]');
        /** password 2 is verplicht moet match zijn met password1 */
        $this->form_validation->set_rules('password2', 'password2', 'required|min_length[8]|matches[password]');
        /** email moet een geldige adress zijn */
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('leerling_nr', 'leerling_nr', 'required');
        $this->form_validation->set_rules('klas', 'klas', 'required');
        $this->form_validation->set_rules('geslacht', 'geslacht', 'required');
        $this->form_validation->set_rules('geboortedatum', 'geboortedatum', 'required');

        if ($this->form_validation->run() === FALSE) {
            /** waneer velden leeg zijn geef validation error aan op register form */
            $this->load->view('register', $data);
        } else {
            /** als validation klopt word functie set_user() in register_model uitgevoerd en een refresh gegeven aan de pagina met een session flashdata */
            $this->load->model('register_model');
            $this->register_model->set_user();
            $this->session->set_flashdata("gelukt", "Uw account is aangemaakt.");
            redirect("register", "refresh");
        }

    }

}