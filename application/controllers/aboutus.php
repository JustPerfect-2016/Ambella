<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aboutus extends CI_Controller {

    public function index() {
        
        $data['title'] = "South Africa's Leading Online Gift Store - Ambella Promotional Gifts";
        $data['description'] = "Everything you ever wanted to know about Ambella and their promotional products.";

        $this->load->view('header',$data);
        $this->load->view('about-us');
        $this->load->view('footer');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */