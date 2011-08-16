<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Helpout extends CI_Controller {

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
		
		/** Before Template Engine
		$header_data['title'] = "Volunteer Information and Signup";
		
		$this->load->view('global_header', $header_data);
		
		$this->load->view('welcome_message');
		
		$this->load->view('global_footer');
		**/
		
		$this->template->set('title', 'Volunteer Information and Signup');
		
		$this->template->load('template', 'welcome_message');
		
	}
}

/* End of file helpout.php */
/* Location: ./application/controllers/helpout.php */