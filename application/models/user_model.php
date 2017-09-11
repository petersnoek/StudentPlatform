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
        $id= $this->input->post('user_id');
        $data = array(
            'motto' => $this->input->post('motto'),
            'hobby' => $this->input->post('hobby'),
            'geboortedatum' => $this->input->post('DOB'),
            'geslacht' => $this->input->post('geslacht'),
            'klas'  => $this->input->post('klas')
        );

        $this->db->where('user_id', $id);
        $this->db->update('users', $data);
    }
    public  function up_avatar(){
        $avatar = $_FILES['avatar']['name'];
        $id= $this->input->post('user_id');
        $this->db->where('user_id', $id);
        $this->db->update('users', array('avatar' => $avatar));
    }

}