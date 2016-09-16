<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aboutus extends CI_Controller {

    public function index() {
        
        $data['title'] = "Startseite";
        $data['description'] = "testing 123";

        $this->load->view('header',$data);
        $this->load->view('about-us');
        $this->load->view('footer');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */