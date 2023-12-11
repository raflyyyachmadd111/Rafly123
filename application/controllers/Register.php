<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Check if the user is not logged in, redirect to the login page
		if ($this->session->userdata('user_id')) {
			redirect('/dashboard');
		}
	}

	public function index()
	{
		$this->load->view('register');
	}
}
