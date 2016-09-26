<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Endorsements extends CI_Controller {

	
	public function index(){
                
                $data['title'] = "Online Corporate and Promotional Gift Store | Ambella";
                $data['description'] = "Supplier of promotional gifts and corporate gifts or clothing. Ambella is well known for providing high quality in promotional items. Call us now";
	
                $this->load->view('header',$data);
		$this->load->view('Endorsements');
                $this->load->view('footer');
	}
  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */