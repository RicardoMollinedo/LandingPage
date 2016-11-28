<?php
/**
 * Created by PhpStorm.
 * User: JuanPablo
 * Date: 14/09/2016
 * Time: 14:34
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        /*$users = $this->access_model->get_all_users(['b.rls_level >=' => get_level()]);
        $data = [
            'users'     =>$users
        ];*/
        $data=$this->liturgical->get_all();
     $eve=$this->events->get_all();
     $numero = cal_days_in_month(CAL_GREGORIAN,2 , 2016);
     $fecha_actual =date("d");
     $fecha_num=(int)$fecha_actual;
     $ObtencionPrueba=3;
     $lectures_date=$this->lectures->get_all();
     "<script>console.log(".'Coño'.");<script>";
     $resultado = array('reader'=>$data
                        ,'even'=>$eve
                        ,'numero_dias'=>$numero
                        ,'fecha_actual'=>$fecha_num
                        ,'Prueba'=>$ObtencionPrueba
                        ,'leidita'=>$lectures_date);
        $this->load->view('LandingPage/home',$resultado);
   

    }

    public function Liturgic_Reader()
    {
        $this->load->view('templates/Header_Pages/times_book');
    }

    public function Calendar_Reader()
    {
        $this->load->view('templates/Header_Pages/calendar');
    }
    public function Lectures_Reader()
    {
        $this->load->view('templates/Header_Pages/lectures');
    }
    public function home_Reader()
    {
        redirect();
        
    }
   
/*
     public function getting_all()
    {
     
     render($resultado);
//$this->load->view('templates/home',$resultado);
    }
  */ 
}
