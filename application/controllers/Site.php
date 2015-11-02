<?php 

/**
* 
*/
class Site extends CI_Controller
{
	function index()
	{
		$this->load->library('pagination');
		$this->load->library('table');
		
		$config['base_url'] = 'http://localhost/ci/index.php/site/index';
		$config['total_rows'] = $this->db->get('data')->num_rows();
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		$config['num_links'] = 20;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		// $config['first_link'] = 'First';
		// $config['first_tag_open'] = '<div>';
		// $config['first_tag_close'] = '</div>';
		// $config['last_link'] = 'Last';
		// $config['last_tag_open'] = '<div>';
		// $config['last_tag_close'] = '</div>';
		// $config['next_link'] = '&gt;';
		// $config['next_tag_open'] = '<div>';
		// $config['next_tag_close'] = '</div>';
		// $config['prev_link'] = '&lt;';
		// $config['prev_tag_open'] = '<div>';
		// $config['prev_tag_close'] = '</div>';
		// $config['cur_tag_open'] = '<b>';
		// $config['cur_tag_close'] = '</b>';
		
		$this->pagination->initialize($config);

		$data['records'] = $this->db->get('data', $config['per_page'], $this->uri->segment(3 ));

		$this->load->view('site_view', $data);
		
		// echo $this->pagination->create_links();
	}
}