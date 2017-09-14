<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 05-Sep-17
 * Time: 11:56 AM
 */
class forum extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        /** controlleerd of niet is ingelogd. */
        if(!isset($_SESSION['user_logged'])){
            /** wanneer  gebruiker niet is ingelogt stuur naar studentplaza/login met session error */
            $this->session->set_flashdata('ERROR','U moet eerst aanmelden voordat u toegang krijgt tot deze pagina!');
            redirect('login', 'Refresh');
        }
    }
    /** het vullen van forum pagina */
    public function index(){
        $this->load->model('forumindex_model');
        /** $data['forums'] roept function binnen inside_model aan */
        $data['forums'] = $this->forumindex_model->get_forums();

        $this->load->view('templates/header_inside');
        /** forum view word geladen met $data gegevens */
        $this->load->view('forum', $data);
        $this->load->view('templates/footer_inside');
    }
}