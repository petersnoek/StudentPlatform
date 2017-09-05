<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 05-Sep-17
 * Time: 4:20 PM
 */
class logout extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        session_destroy();
        redirect('login');
    }
}