<?php
class Barang_model extends CI_Model
{
    public function get_barang()
    {
        $query = $this->db->get('barang'); // 'barang' adalah nama tabel di database
        return $query->result();
    }

    public function delete_barang($id)
    {
        // Hapus barang berdasarkan ID
        $this->db->where('id', $id);
        $this->db->delete('barang');
    }

    public function get_barang_by_id($id)
    {
        // Ambil data barang berdasarkan ID
        $this->db->where('id', $id);
        $query = $this->db->get('barang');
        return $query->row();
    }

    public function update_barang($id, $data)
    {
        // Update data barang berdasarkan ID
        $this->db->where('id', $id);
        $this->db->update('barang', $data);
    }

    public function insert_barang($data)
    {
        // Insert data barang ke dalam database
        $this->db->insert('barang', $data);
    }
}
