<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Word_Generators extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		redirect('Word_Generators/random_word');
	}

	public function random_word()
	{
		$this->load->helper('string');
		$random_word = random_string('alnum', 14);
		$this->session->set_flashdata('random_word', $random_word);
		if ($this->session->userdata('counter')!== null)
		{
			$this->session->set_userdata('counter', $this->session->userdata('counter') + 1);
		} 
		else
		{	
			$this->session->set_userdata('counter', 1);
		}
		$this->load->view('random/index.php');
	}
}

//end of main controller