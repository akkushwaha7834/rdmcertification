<?php

class certi_model extends CI_Model
{
    public function certi_data_submit($data, $image)
    {
        $data = [
            'name' => $data['name'],
            'image' => $image,
            'description' => $data['description'],
            'slug' => $data['slug'],
            'brief_desc' => $data['brief_desc'],
        ];
        if ($this->db->insert('certificate_detail', $data)) {
            return $data;
        } else {
            return false;
        }
    }

    public function certi_view()
    {
        $result = $this->db->query("SELECT * FROM certificate_detail ORDER BY id DESC");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return [];
        }
    }

    public function certi_data_nm($slug)
    {
        $result = $this->db->query("
            SELECT * 
            FROM certificate_detail 
            WHERE REPLACE(LOWER(slug), ' ', '-') = ?", [$slug]);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return [];
        }
    }

    public function certi_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('certificate_detail');
    }

    public function certi_update_data($data, $image)
    {
        $newdata = [
            'name' => $data['name'],
            'image' => $image,
            'description' => $data['description'],
            'brief_desc' => $data['brief_desc'],
        ];
        $this->db->where('id', $data['id']);
        if ($this->db->update('certificate_detail', $newdata)) {
            return $newdata;
        } else {
            return false;
        }
    }

    public function certi_edit($id)
    {
        $result = $this->db->query("SELECT * FROM certificate_detail WHERE id = ?", [$id]);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return [];
        }
    }
}
