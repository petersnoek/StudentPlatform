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
<<<<<<< HEAD:application/controllers/inside.php
    /** het vullen van inside pagina */
    public function index($forum_id = NULL){
        $this->load->model('inside_model');
        /** $data['forums'] roept function binnen inside_model aan */
        $data['forums'] = $this->inside_model->get_forums();
        $data['num_comments'] = $this->inside_model->get_num_comments($forum_id);
        $data['num_rows'] = count($data['num_comments']);
=======
    /** het vullen van forum pagina */
        $this->load->model('forumindex_model');
        /** $data['forums'] roept function binnen inside_model aan */
        $data['forums'] = $this->forumindex_model->get_forums();
>>>>>>> 100bda662ecf445f7e8e11b002796927c520e333:application/controllers/forum.php

        $this->load->view('templates/header_inside');
        /** forum view word geladen met $data gegevens */
        $this->load->view('forum', $data);
        $this->load->view('templates/footer_inside');
    }
}