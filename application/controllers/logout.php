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
        /** logout.php zorgt alleen dat session gegevens vergeten worden zodat gebruiker niet meer actief staat. gebruiker moet opnieuw inloggen als hij/zij inside wilt benaderen */
        session_destroy();
        redirect('login');
    }
}