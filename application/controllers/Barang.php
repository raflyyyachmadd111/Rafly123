<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    public function delete($id)
    {
        // Panggil model untuk menghapus barang dengan ID tertentu
        $this->Barang_model->delete_barang($id);

        // Setelah menghapus, redirect kembali ke halaman dashboard
        redirect('dashboard');
    }

    public function edit($id)
    {
        // Ambil data barang berdasarkan ID
        $data['barang'] = $this->Barang_model->get_barang_by_id($id);

        // Load view untuk form edit
        $this->load->view('admin/edit_barang', $data);
    }

    public function update()
    {
        // Ambil data dari form edit
        $id = $this->input->post('id');
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'harga_barang' => $this->input->post('harga_barang'),
            'jumlah_barang' => $this->input->post('jumlah_barang')
        );

        // Panggil model untuk update data barang
        $this->Barang_model->update_barang($id, $data);

        // Redirect kembali ke halaman dashboard
        redirect('dashboard');
    }

    public function tambah()
    {
        $this->load->view('admin/tambah_barang');
    }

    public function insert()
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'harga_barang' => $this->input->post('harga_barang'),
            'jumlah_barang' => $this->input->post('jumlah_barang')
        );
        $this->Barang_model->insert_barang($data);
        redirect('dashboard');
    }
}
