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
		$this->load->library('form_validation');

		//rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('newsletter');
		} else
		{
			// has passed
			$name = $this->input->post('name');
			$email = $this->input->post('email');

			//send
			$this->load->library('email'); //, $config
			$this->email->set_newline("\r\n");
			
			$this->email->from('mailbox4johndoe@gmail.com', 'John Doe');
			$this->email->to($email);
			$this->email->subject('Test signUp info');
			$this->email->message('You\'ve now signed up.');

			$path = $this->config->item('server_root');
			$file = $path . '/ci/attachments/info.txt';

			$this->email->attach($file);


			if ($this->email->send()) 
			{
				// echo('Your email was send, fool.');
				$this->load->view('signup_confirmation_view');
			} else {
				show_error($this->email->print_debugger());
			}
		}
	}
}