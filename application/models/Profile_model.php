<?php

class Profile_model extends CI_Model
{
    public function getProfile()
    {
        return $this->db->get('profile')->result_array();
    }

    public function get_detail_profil($id_profile)
    {
        return $this->db->get_where('profile', ['id_profile' => $id_profile])->row_array();
    }

    public function create($data)
    {
        $this->db->insert('profile', $data);
        return $this->db->insert_id();
    }

    public function update($id, $data)
    {
        $this->db->where('id_profile', $id);
        $this->db->update('profile', $data);
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $this->db->where('id_profile', $id);
        $this->db->delete('profile');
        return $this->db->affected_rows();
    }
}