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
			$this->session->set_flashdata('success_message', 'Akun berhasil di daftarkan. Silahkan Login.');
			redirect('/');
		} else {
			$this->load->view('register');
		}
	}


	public function login()
	{
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
					$this->session->set_flashdata('error_message', 'Password salah.');
				}
			} else {
				$this->session->set_flashdata('error_message', 'Pengguna tidak ditemukan.');
			}
		}
		redirect('/');
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		$this->session->sess_destroy();
		redirect('/');
	}
}
