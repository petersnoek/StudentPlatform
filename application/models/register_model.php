<?php
class register_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function set_user()
	{
        $data = array(
            'username' => $_POST['username'],
            'password' =>md5($_POST['password']),
            'email' => $_POST['email'],
            'leerling_nr' => $_POST['leerling_nr'],
            'klas' => $_POST['klas'],
            'geslacht' => $_POST['geslacht'],
            'geboortedatum' => $_POST['geboortedatum'],
            'role_id' => $_POST['functie']

        );
        $this->db->insert('users', $data);



        $this->session->set_flashdata("gelukt", "Uw account is aangemaakt.");
            redirect("register", "refresh");


        }
}
