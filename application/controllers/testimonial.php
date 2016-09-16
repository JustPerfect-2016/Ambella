<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testimonial extends CI_Controller {
	
	public function index(){
            
                $data['title'] = "Client Testimonials";
                $data['description'] = "Products are sourced from local and international suppliers, guaranteeing a wide range of executive and promotional gifts that accurately reflect your company image.";
            
            
                $this->load->view('header',$data);
		$this->load->view('testimonial');
                $this->load->view('footer');
	}
  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */