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
        
        $data['title'] = "Featured Products";
        $data['description'] = "we sell the best promotional products such as Headware,Corporate Clothing Items,Corporate Gift Hampers,Corporate Wear,Diaries,Overall Workwear,Koozies";
        
        $this->load->view('header',$data);
        $this->load->view('featuredproducts/index');
        $this->load->view('footer');
    }

    public function promotionalcapsandheadwear() {
        
        $data['title'] = "Promotional Caps & Headwear | Ambella Corporate Clothing";
        $data['description'] = "Ambella Corporate Clothing offers a wide range of  quality promotional Caps and Headwear, contact us today for more information.";
        
        $this->load->view('header',$data);
        $this->load->view('featuredproducts/promotionalcapsandheadwear');
        $this->load->view('footer');
    }
    
     public function promotionalgifts() {
         
        $data['title'] = "Promotional Gifts | Promotional Gifts Supplier | Ambella Promotional Gifts";
        $data['description'] = "Ambella is your one-stop promotional gifts supplier with the widest variety of promotional gifts. Contact us today"; 
         
        $this->load->view('header',$data);
        $this->load->view('featuredproducts/promotionalgifts');
        $this->load->view('footer');
    }

    public function corporateclothing() {
        
        $data['title'] = "Corporate Clothing | Corporate Work Wear Suppliers | Ambella";
        $data['description'] = "We are quality Corporate Clothing &amp; Work Wear Suppliers in Johannesburg. Contact Ambella Corporate Clothing about our shirt, jackets, caps and more.";
        
        $this->load->view('header',$data);
        $this->load->view('featuredproducts/corporateclothing');
        $this->load->view('footer');
    }

    public function corporatehampers() {
        
        $data['title'] = "Corporate Gifts | Ambella Corporate Gifts";
        $data['description'] = "Get Amazing corporate gifts for your clients at Ambella corporate gifts, contact us today.";
        
        $this->load->view('header',$data);
        $this->load->view('featuredproducts/corporatehampers');
        $this->load->view('footer');
    }

    public function corporategifts() {
        
        $data['title'] = "Corporate Gifts | Branded Promotional Gifts | Ambella Johannesburg";
        $data['description'] = "Ambella is a proud supplier of corporate gifts Johannesburg. If you are looking for the perfect corporate that creates awareness around your brand, contact us.";
        
        $this->load->view('header',$data);
        $this->load->view('featuredproducts/corporategifts');
        $this->load->view('footer');
    }

    public function corporatewear() {
        
        $data['title'] = "Corporate Wear | Corporate Wear Suppliers | Ambella Corporate Wear";
        $data['description'] = "Ambella is a proud supplier of all your corporate wear. We have a full range of high quality corporate wear items to meet your every need. Call us today.";
        
        $this->load->view('header',$data);
        $this->load->view('featuredproducts/corporatewear');
        $this->load->view('footer');
    }

    public function diaries() {
        
        $data['title'] = "Diaries | Corporate Diaries Supplier | Ambella";
        $data['description'] = "Ambella has a wide range of professional corporate diaries to suite your every need, Contact us today for more information";
        
        $this->load->view('header',$data);
        $this->load->view('featuredproducts/diaries');
        $this->load->view('footer');
    }

    public function koozies() {
        
        $data['title'] = "Promotional Koozies | Koozies Suppliers | Ambella";
        $data['description'] = "mbella is a reliable supplier of promotional koozies and branded koozies. Contact us today for more information on our trusted promotional products";
        
        $this->load->view('header',$data);
        $this->load->view('featuredproducts/koozies');
        $this->load->view('footer');
    }

    public function overallworkwear() {
        
        $data['title'] = "Overall Workwear | Overall Workwear Suppliers | Ambella";
        $data['description'] = "Ambella is the ultimate overall workwear supplier and can be relied on for quality overall workwear. Contact us for more information.";
        
        $this->load->view('header',$data);
        $this->load->view('featuredproducts/overallworkwear');
        $this->load->view('footer');
    }

    public function powerbanks() {
        
        $data['title'] = "Powerbanks | Powerbanks Supplier | Ambella Corporate Gifts";
        $data['description'] = "Get our powerbanks today, select from a wide range of powerbanks. Contact Ambella Corporate Gifts today for more information";
        
        $this->load->view('header',$data);
        $this->load->view('featuredproducts/powerbanks');
        $this->load->view('footer');
    }

    public function promotionalclothing() {
        
        $data['title'] = "Promotional Clothing | Promotional Clothing Supplier | Ambella Promotional Clothing";
        $data['description'] = "Ambella is reliable promotional clothing suppliers that offer the highest quality product and value for money. Call us today.";
        
        $this->load->view('header',$data);
        $this->load->view('featuredproducts/promotionalclothing');
        $this->load->view('footer');
    }

    public function remoteselfiestick() {
        
        $data['title'] = "Selfie Sticks | Remote Selfie Stick | Ambella Promotional Gifts";
        $data['description'] = "Ambella Supplies a cool range of promotional gifts and corporate clothing. We have some cutting edge products for promotional gifts including remote selfie sticks and more. Contact us today";
        
        $this->load->view('header',$data);
        $this->load->view('featuredproducts/remoteselfiestick');
        $this->load->view('footer');
    }

    public function workwear() {
        
        $data['title'] = "Workwear | Workwear Supplier | Ambella";
        $data['description'] = "Ambella is a trusted workwear supplier with a range of workwear items to meet your individual needs. Contact Ambella today.";
        
        $this->load->view('header',$data);
        $this->load->view('featuredproducts/workwear');
        $this->load->view('footer');
    }
    public function caps() {
        
        $data['title'] = "";
        $data['description'] = "";
        
        $this->load->view('header',$data);
        $this->load->view('featuredproducts/caps');
        $this->load->view('footer');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */