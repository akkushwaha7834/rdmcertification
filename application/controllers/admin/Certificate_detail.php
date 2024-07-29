<?php
defined('BASEPATH') or exit('No direct script access allowed');

class certificate_detail extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(['url', 'form', 'cookie', 'security']);
        $this->load->library(['pagination', 'session', 'email', 'form_validation', 'encryption', 'upload']);
        $this->load->model('admin/certificate_detail_model', 'certificate_detail_model');
        date_default_timezone_set('Asia/Kolkata');
    }

    public function add_certificate_detail()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view'] = 'admin/certificate_detail/add_certificate_detail';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function certificate_detail_submit_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            if ($this->input->post()) {
                $data = $this->input->post();
                $config['upload_path'] = 'uploads/certificates';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
                $config['encrypt_name'] = TRUE;
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('certificates_image')) {
                    $uploadData = $this->upload->data();
                    $certificates_image = $uploadData['file_name'];
                    if ($this->certificate_detail_model->certificate_detail_data_submit($data, $certificates_image)) {
                        redirect("admin/certificate_detail/certificate_detail_view");
                    } else {
                        $data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> Sorry, please try again.</div>';
                    }
                } else {
                    $data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> ' . $this->upload->display_errors() . '</div>';
                }
                $this->load->view('admin/certificate_detail/add_certificate_detail', $data);
            }
        } else {
            redirect('admin/auth/login');
        }
    }

    public function certificate_detail_view()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['certificate_detail_view'] = $this->certificate_detail_model->certificate_detail_view();
            $data['view'] = 'admin/certificate_detail/view_certificate_detail';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function certificate_detail_edit($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view_certificate_detail'] = $this->certificate_detail_model->certificate_detail_edit($id);
            $data['view'] = 'admin/certificate_detail/edit_certificate_detail';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function certificate_detail_update_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            if ($this->input->post()) {
                $data = $this->input->post();
                $config['upload_path'] = 'uploads/certificates';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
                $config['encrypt_name'] = TRUE;
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('certificates_image')) {
                    $uploadData = $this->upload->data();
                    $certificates_image = $uploadData['file_name'];
                } else {
                    $certificates_image = $data['existing_certificates_image']; // Use existing image if upload fails
                }

                if ($this->certificate_detail_model->certificate_detail_update_data($data, $certificates_image)) {
                    redirect("admin/certificate_detail/certificate_detail_view");
                } else {
                    $data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> Sorry, please try again.</div>';
                }
                $this->load->view('admin/certificate_detail/edit_certificate_detail', $data);
            }
        } else {
            redirect('admin/auth/login');
        }
    }

    public function certificate_detail_delete($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            if ($this->certificate_detail_model->certificate_detail_delete($id)) {
                redirect("admin/certificate_detail/certificate_detail_view");
            }
        } else {
            redirect('admin/auth/login');
        }
    }
}
