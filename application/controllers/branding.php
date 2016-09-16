<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Branding extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
                
                $data['title'] = "Branding Solutions - Promote your Brand - Branding Services";
                $data['description'] = "Give your brand a professional branded corporate image. We brand clothing or gifts. Digital printing, screen printing &amp; more. Request a quote today!";
	
                $this->load->view('header',$data);
		$this->load->view('branding/index');
                $this->load->view('footer');
	}
       
        public function debossing(){
                
                $data['title'] = "Debossing Services | Quality Logo Products  - Get a quote";
                $data['description'] = "We have branding solutions that creates a professional corporate gifts that represents a company’s brand elegantly. Call us today!";
	
                $this->load->view('header',$data);
		$this->load->view('branding/debossing');
                $this->load->view('footer');
	}
        
        public function digitalprinting(){
	
                $data['title'] = "Digital Printing Solutions, For all Digital Printing Needs | Ambella";
                $data['description'] = "Get a quote for Professional Digital Printing Services For Any Digital Printing solutions! The technique is used for producing logos in excellent quality";
        
                $this->load->view('header');
		$this->load->view('branding/digitalprinting');
                $this->load->view('footer');
	}
        
        public function digitaltransferprinting(){
            
                $data['title'] = "Digital Transfer Printing Solutions - Corporate Branding Services";
                $data['description'] = "We produce high quality digital transfer printing solutions for you! Call us today, request a quote and you will never regret!";
                
                $this->load->view('header');
		$this->load->view('branding/digitaltransferprinting');
                $this->load->view('footer');
	}
        
        public function embroidery(){
            
                $data['title'] = "Embroidery Designs - Embroidery Corporate Stiches";
                $data['description'] = "Embroidery is an excellent way to brand clothing and will always be a good investment when done professionally. Call us today, request a quote!";
                
                $this->load->view('header');
		$this->load->view('branding/embroidery');
                $this->load->view('footer');
	}
        
        public function laserprinting(){
            
                $data['title'] = "Laser Printing | Laser Engraving - Laser Printing Solutions";
                $data['description'] = "Using laser engraving to brand a promotional item produces a flawless design. We are experts when ti comes to laser printing, call us today. Request a quote";
                
                $this->load->view('header');
		$this->load->view('branding/laserprinting');
                $this->load->view('footer');
	}
        
        public function padprinting(){
                
                $data['title'] = "Pad Printing Services - Pad Printing Solutions - Ambella";
                $data['description'] = "Pad printing is excellent to use on a number of items for transferring logos and company details, Call us today to request a quote for pad printing.";
	
                $this->load->view('header');
		$this->load->view('branding/padprinting');
                $this->load->view('footer');
	}
        
        public function screenprinting(){
                
                $data['title'] = "Screen Printing Solutions In South Africa - Ambella";
                $data['description'] = "We design, we print, full colour screen printing, high quality and fast turn around! Call us to request a quote today!";
	
                $this->load->view('header');
		$this->load->view('branding/screenprinting');
                $this->load->view('footer');
	}
        
        public function sublimation(){
                
                $data['title'] = "Sublimation Printing Johannesburg - Digital Printing SA";
                $data['description'] = "Get a quote for sublimation printing solutions today. We are a corporate and promotional gifts store that also offers digital printing solutions.";
	
                $this->load->view('header');
		$this->load->view('branding/sublimation');
                $this->load->view('footer');
	}
        
 
        public function whybrandedgifts(){
                
                $data['title'] = "Branded gifts, corporate and promotional gifts - Ambella Online Store";
                $data['description'] = "Why you should make branded gifts the center of your marketing strategy. We are leading suppliers of branded and corporate gifts. Contact us now!";
	
                $this->load->view('header');
		$this->load->view('branding/whybrandedgifts');
                $this->load->view('footer');
	} 
        

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */