<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->library('session');

		// Check if the user is not logged in, redirect to the login page
		if (!$this->session->userdata('user_id')) {
			$this->session->set_flashdata('error_message', 'Silahkan Login terlebih dahulu.');
			redirect('/');
		}

		$this->load->model('Barang_model');
	}

	public function index()
	{
		$data['barang'] = $this->Barang_model->get_barang();

		$this->load->view('dashboard', $data);
	}
}
