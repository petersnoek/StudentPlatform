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
    /** het aanmaken van Mijn_profiel pagina */
    public function Mijn_profiel(){
        $this->load->model('user_model');
        /** voert recieve functie uit binnen user_model */
        $data['user']=$this->user_model->recieve();

        $this->load->view('templates/header_inside');
        $this->load->view('users/Mijn_Profiel', $data);
        $this->load->view('templates/footer_inside');
    }
    /** het aanmaken van wijzig pagina  */
    public function  wijzig(){

        $this->load->model('user_model');
        /** voert recieve functie uit binnen user_model */
        $data['user']=$this->user_model->recieve();
        $this->load->view('templates/header_inside');
        $this->load->view('users/wijzig_profiel', $data);
        $this->load->view('templates/footer_inside');
        /** als submit kopje ingedrukt is wordt send functie uitgevoert en weer terug gestuurd naar mijn_profiel */
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $this->user_model->send();
            redirect("user/mijn_profiel", "refresh");
        }

    }
    /** upload_avatar bestaat binnen wijzig pagina */
   public function  upload_avatar(){
        /** a;s kopje upload word ingevoerd word onderstaande code uitgevoert */
        if(isset($_POST['upload'])){
            //locatie voor opslaan van avatar
            $target= $_SERVER['DOCUMENT_ROOT'] ."/studentplaza/assets/img/avatars/".basename($_FILES['avatar']['name']);
            $this->load->model('user_model');
            /** functie up_avatar binnen  user_model word uitgevoert */
            $this->user_model->up_avatar();
            /** waneer foto word verstuurd naar $target stuur terug naar mijn_profiel */
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $target)){
                redirect("user/mijn_profiel", "refresh");
            }
            /** wanneer dit niet lukt geef error  */
            else{
                $msg = "er is een fout ontstaan tijdens het uploaden van uw avatar";
            }
        }

   }
}