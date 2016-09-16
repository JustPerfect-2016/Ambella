<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class FeaturedProducts extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('header');
        $this->load->view('featuredproducts/index');
        $this->load->view('footer');
    }

    public function promotionalcapsandheadwear() {
        $this->load->view('header');
        $this->load->view('featuredproducts/promotionalcapsandheadwear');
        $this->load->view('footer');
    }
    
     public function promotionalgifts() {
        $this->load->view('header');
        $this->load->view('featuredproducts/promotionalgifts');
        $this->load->view('footer');
    }

    public function corporateclothing() {
        $this->load->view('header');
        $this->load->view('featuredproducts/corporateclothing');
        $this->load->view('footer');
    }

    public function corporatehampers() {
        $this->load->view('header');
        $this->load->view('featuredproducts/corporatehampers');
        $this->load->view('footer');
    }

    public function corporategifts() {
        $this->load->view('header');
        $this->load->view('featuredproducts/corporategifts');
        $this->load->view('footer');
    }

    public function corporatewear() {
        $this->load->view('header');
        $this->load->view('featuredproducts/corporatewear');
        $this->load->view('footer');
    }

    public function diaries() {
        $this->load->view('header');
        $this->load->view('featuredproducts/diaries');
        $this->load->view('footer');
    }

    public function koozies() {
        $this->load->view('header');
        $this->load->view('featuredproducts/koozies');
        $this->load->view('footer');
    }

    public function overallwordkwear() {
        $this->load->view('header');
        $this->load->view('featuredproducts/overallwordkwear');
        $this->load->view('footer');
    }

    public function powerbanks() {
        $this->load->view('header');
        $this->load->view('featuredproducts/powerbanks');
        $this->load->view('footer');
    }

    public function promotionalclothing() {
        $this->load->view('header');
        $this->load->view('featuredproducts/promotionalclothing');
        $this->load->view('footer');
    }

    public function remoteselfiestick() {
        $this->load->view('header');
        $this->load->view('featuredproducts/remoteselfiestick');
        $this->load->view('footer');
    }

    public function workwear() {
        $this->load->view('header');
        $this->load->view('featuredproducts/workwear');
        $this->load->view('footer');
    }
    public function caps() {
        $this->load->view('header');
        $this->load->view('featuredproducts/caps');
        $this->load->view('footer');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */