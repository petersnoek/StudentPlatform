<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 10-Sep-17
 * Time: 11:57 AM
 */
class user_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function recieve (){

        $username = $_SESSION['username'];
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('username'=>$username));
        $query = $this->db->get();

        if ($query->num_rows() > 0)
        { return $query->row_array();
        }
        else {return NULL;}

    }
    public function send(){
        $value=array('geslacht'=>$geslacht,'klas'=>$klas,'title'=>$DOB);
    }


}