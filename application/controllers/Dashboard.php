<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();
		if($this->session->userdata('status') != 'login'){
			redirect('login');
		}
    }
	
	public function index()
	{
		$data = [
			'header'        => 'partials/header',
			'navbar'        => 'partials/navbar',
			'sidebar'       => 'partials/sidebar',
			'content'       => 'dashboard/index',
			'footer'        => 'partials/footer',
		];
		
		$this->load->view('master', $data);
	}
}