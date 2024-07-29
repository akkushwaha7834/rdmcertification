<?php
class certificate_detail_model extends CI_Model
{
    public function certificate_detail_data_submit($data, $certificates_image)
    {
        $data = [
            'certificates_name' => $data['certificates_name'],
            'certificates_image' => $certificates_image,
            'certificates_description' => $data['certificates_description'],
        ];
        if ($this->db->insert('certificate_detail', $data)) {
            return $data;
        } else {
            return false;
        }
    }

    public function certificate_detail_view()
    {
        $result = $this->db->query("SELECT * FROM `certificate_detail`;");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function certificate_detail_delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('certificate_detail');
    }

    public function certificate_detail_update_data($data, $certificates_image)
    {
        $newdata = [
            'certificates_name' => $data['certificates_name'],
            'certificates_image' => $certificates_image,
            'certificates_description' => $data['certificates_description'],
        ];
        $this->db->where('id', $data['id']);
        if ($this->db->update('certificate_detail', $newdata)) {
            return $newdata;
        } else {
            return false;
        }
    }

    public function certificate_detail_edit($id)
    {
        $result = $this->db->query("SELECT * FROM `certificate_detail` WHERE id = $id");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public function role_fetch()
    {
        $role_data = $this->db->query("SELECT * FROM `certificate_detail`");
        $fetch = $role_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $role_data->result_array();
        } else {
            return false;
        }
    }
}
