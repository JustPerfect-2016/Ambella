<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutus extends CI_Controller {
	
	public function index()
	{
                $this->load->view('header');
		$this->load->view('about-us');
                $this->load->view('footer');
	}
  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */