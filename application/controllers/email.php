<?php 

/**
* SEND EMAIL WITH GMAIL
*/
class Email extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}	

	function index()
	{
		$this->load->view('newsletter');
	}

	function send()
	{
		$this->load->library('email'); //, $config
		$this->email->set_newline("\r\n");
		
		$this->email->from('mailbox4johndoe@gmail.com', 'John Doe');
		$this->email->to('bogdandemchenko@gmail.com');
		$this->email->subject('This is an email test');
		$this->email->message('It\'s working. Yeah!');

		$path = $this->config->item('server_root');
		$file = $path . '/ci/attachments/info.txt';

		$this->email->attach($file);


		if ($this->email->send()) 
		{
			echo('Your email was send, fool.');
		} else {
			show_error($this->email->print_debugger());
		}
	}
}