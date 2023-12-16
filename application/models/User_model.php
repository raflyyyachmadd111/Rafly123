<?php
class User_model extends CI_Model
{
    public function create_user($data)

    {
        return $this->db->insert('users', $data);
    }

    public function get_user_by_usernme($username)

    {
        return $this->db->get_where('users', ['username' => $username])->row_array();
    }
}
