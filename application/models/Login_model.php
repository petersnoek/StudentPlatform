<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 04-Sep-17
 * Time: 5:36 PM
 */

class Login_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }
    public function  check_user(){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('username'=>$username, 'password'=>$password));
        $query = $this->db->get();
        if($query->num_rows() > 0) {
            $user = $query->row();

            if ($user->username) {
                $this->session->set_flashdata('gelukt', 'je bent aangemeld');

                $_SESSION['user_logged'] = TRUE;
                $_SESSION['username'] = $user->username;

                redirect('home', 'refresh');
            }
        }
        else{
            $this->session->set_flashdata("mislukt", "Dit account bestaat niet!");
            redirect("login", "refresh");

        }
    }

}