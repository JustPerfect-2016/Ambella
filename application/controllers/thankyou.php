<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ThankYou extends CI_Controller {
	
	public function index()
	{
                $this->load->view('header');
		$this->load->view('thankyou');
                $this->load->view('footer');
	}
  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */