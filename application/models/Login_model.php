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

        /** beide vars  roepen velden aan van login form */
        $username = $_POST['username'];
        /** @var  $password bevat md5 hash aan voor veiligheid van gebruikers */
        $password = md5($_POST['password']);
        /** Query word aangemaakt op te kijken als gebruiker bestaat */
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('username'=>$username, 'password'=>$password));
     /**   $this->db->join('roles', 'users.role_id = roles.role_id'); **/
        $query = $this->db->get();
    /** als query bestat doe volgende actie */
        if($query->num_rows() > 0) {
            /** @var  $user  query row wordt hernoemd  */
            $user = $query->row();

            /** als query row is gevuld met username of password voer volgende opdracht uit */
            if ($user->username) {
                $this->session->set_flashdata('gelukt', 'je bent aangemeld');
                /** zorgt dat gegevens in session bewaard worden voor later gebruik */
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['avatar'] = $user->avatar;
                $_SESSION['username'] = $user->username;
                $_SESSION['leerling_nr'] = $user->leerling_nr;
                $_SESSION['email'] = $user->email;
                $_SESSION['klas'] = $user->klas;
                $_SESSION['geslacht'] = $user->geslacht;
                $_SESSION['DOB']= $user->geboortedatum;
                $_SESSION['motto']=$user->motto;
                $_SESSION['hobby']=$user->hobby;
                $_SESSION['role']=$user->role_id;
                /** nadat alles succes vol is gegaan stuur door naar studentplaza/forum */
                redirect('intern', 'refresh');
            }
        }
        /** als query leeg is, refresh pagina en weergeef sessions error op login form*/
        else{
            $this->session->set_flashdata("ERROR", "Gebruikersnaam of wachtwoord is onjuist!");
            redirect("login", "refresh");

        }
    }

}