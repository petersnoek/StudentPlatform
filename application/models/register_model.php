<?php
class register_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}
/** function set_user word aangeroepen door register controller */
	public function set_user()
	{
	    /** data array word gebruikt op de query klein te houden (array word gevuld met gegevens van register form */
        $data = array(
            'username' => $_POST['username'],
            'password' =>md5($_POST['password']),
            'email' => $_POST['email'],
            'leerling_nr' => $_POST['leerling_nr'],
            'klas' => $_POST['klas'],
            'geslacht' => $_POST['geslacht'],
            'geboortedatum' => $_POST['geboortedatum'],
            'role_id' => $_POST['functie'],
            'avatar' => '1.png'

        );
        $this->db->insert('users', $data);


        /** als account is aangemaakt geef sessions melding dat het gelukt is op register pagina */
        $this->session->set_flashdata("gelukt", "Uw account is aangemaakt.");
            redirect("register", "refresh");


        }
}
