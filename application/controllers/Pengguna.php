<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
    public function __construct(){
        parent::__construct();
		if($this->session->userdata('status') != 'login'){
			redirect('login');
		}
        $this->load->model('user_model');
        $this->load->library('pdf');
    }
	
	public function index()
	{
		$data = [
			'header'        => 'partials/header',
			'navbar'        => 'partials/navbar',
			'sidebar'       => 'partials/sidebar',
			'content'       => 'pengguna/index',
			'footer'        => 'partials/footer',
		];
		$data['list_user'] = $this->user_model->all()->result();
		$this->load->view('master', $data);
	}

    public function export_pdf(){
        $data['title'] = "Daftar Pengguna";
		$data['list_user'] = $this->user_model->all()->result();
		$filename = "DaftarPengguna";
		$paper = 'A4';
		$orientation = 'portrait';
		$view = $this->load->view('pengguna/daftarpengguna', $data, true);
        $this->pdf->generate($view, $filename, $paper, $orientation);
    }
}