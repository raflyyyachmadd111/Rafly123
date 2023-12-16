<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }


    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('passowrd'), PASSWORD_BCRYPT),
            ];

            $this->user_model->create_user($data);
            $this->session->set_flashdata('success_massage', 'Akun berhasil di daftarkan. Silahkan Logon');
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
            $user = $this->user_model->get_user_by_usernme($username);
            // print_r($user);
            // die;
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $this->session->set_userdata('user_id', $user['id']);
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('error_massage', 'Password salah.');
                }
            } else {
                $this->session->set_flashdata('error_massage', 'Pengguna tidak ditemukan.');
            }
        }
        redirect('/');
    }
}
