<?php
//include '/system/core/Controller.php';
class About extends CI_Controller {

    function index()
    {
        $this->load->helper('url');
        $data = array('title' => 'Boutique de Flores');
        $this->load->view('templates/header', $data);
        $this->load->view('bodyAbout', $data);
        $this->load->view('templates/footer', $data);
    }
}
?>