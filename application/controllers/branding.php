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
	public function index()
	{
                $this->load->view('header');
		$this->load->view('branding/index');
                $this->load->view('footer');
	}
       
        public function debossing()
	{
                $this->load->view('header');
		$this->load->view('branding/debossing');
                $this->load->view('footer');
	}
        
        public function digitalprinting()
	{
                $this->load->view('header');
		$this->load->view('branding/digitalprinting');
                $this->load->view('footer');
	}
        
        public function digitaltransferprinting()
	{
                $this->load->view('header');
		$this->load->view('branding/digitaltransferprinting');
                $this->load->view('footer');
	}
        
        public function embroidery()
	{
                $this->load->view('header');
		$this->load->view('branding/embroidery');
                $this->load->view('footer');
	}
        
        public function laserprinting()
	{
                $this->load->view('header');
		$this->load->view('branding/laserprinting');
                $this->load->view('footer');
	}
        
        public function padprinting()
	{
                $this->load->view('header');
		$this->load->view('branding/padprinting');
                $this->load->view('footer');
	}
        
        public function sublimation()
	{
                $this->load->view('header');
		$this->load->view('branding/sublimation');
                $this->load->view('footer');
	}
        
        public function screenprinting()
	{
                $this->load->view('header');
		$this->load->view('branding/screenprinting');
                $this->load->view('footer');
	}
         
        

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */