<?php
class MiControlador extends CI_Controller {

    function index(){
        $data = array('title' => 'Boutique de Flores');
        $this->load->helper('url');
        $this->load->view('index', $data);
        /*
        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer', $data);
         */
   }
   function about(){
        $this->load->helper('url');
        $this->load->view('about');
   }
}
?>