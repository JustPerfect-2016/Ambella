<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ContactUs extends CI_Controller {

	
	public function index(){
                
                $data['title'] = "Promotional Gifts and Corporate Gifts Online | Ambella promo gifts";
                $data['description'] = "Contact Ambella today to get the best functional and aesthetic promotional products. We will supply all the promotional and branding needs.";
	
                $this->load->view('header',$data);
		$this->load->view('contact-us');
                $this->load->view('footer');
	}
  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */