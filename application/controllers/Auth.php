<?php
class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		// $this->load->library('session');
	}

	public function register()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$data = [
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
			];

			$this->user_model->create_user($data);
			$data['success_message'] = 'Akun berhasil di daftarkan. Silahkan Login.';
			$this->load->view('login', $data);
		} else {
			$this->load->view('register');
		}
	}


	public function login()
	{
		$data['error_message'] = '';

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->user_model->get_user_by_username($username);

			if ($user) {
				// Check if the provided password matches the stored hashed password
				if (password_verify($password, $user['password'])) {
					$this->session->set_userdata('user_id', $user['id']);
					redirect('dashboard'); // Redirect to the dashboard or another page upon successful login
				} else {
					$data['error_message'] = 'Invalid password';
				}
			} else {
				$data['error_message'] = 'User not found';
			}
		}

		$this->load->view('login', $data);
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		redirect('auth/login');
	}
}
