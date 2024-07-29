<?php
defined('BASEPATH') or exit('No direct script access allowed');

class certi extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(['url', 'form', 'cookie', 'security']);
        $this->load->library(['pagination', 'session', 'email', 'form_validation', 'encryption', 'upload']);
        $this->load->model('admin/certi_model', 'certi_model');
        date_default_timezone_set('Asia/Kolkata');
    }

    public function add_certi()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view'] = 'admin/certi/add_certi';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function certi_submit_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            if ($this->input->post()) {
                $data = $this->input->post();
                $config['upload_path'] = 'uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
                $config['encrypt_name'] = TRUE;
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('image')) {
                    $uploadData = $this->upload->data();
                    $image = $uploadData['file_name'];
                    if ($this->certi_model->certi_data_submit($data, $image)) {
                        redirect("admin/certi/certi_view");
                    } else {
                        $data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> Sorry, please try again.</div>';
                    }
                } else {
                    $data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> ' . $this->upload->display_errors() . '</div>';
                }
                $this->load->view('admin/certi/add_certi', $data);
            }
        } else {
            redirect('admin/auth/login');
        }
    }

    public function certi_view()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['certi_view'] = $this->certi_model->certi_view();
            $data['view'] = 'admin/certi/view_certi';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function certi_edit($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['view_certi'] = $this->certi_model->certi_edit($id);
            $data['view'] = 'admin/certi/edit_certi';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function certi_update_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            if ($this->input->post()) {
                $data = $this->input->post();
                $config['upload_path'] = 'uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
                $config['encrypt_name'] = TRUE;
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('image')) {
                    $uploadData = $this->upload->data();
                    $image = $uploadData['file_name'];
                } else {
                    $image = $data['existing_image']; // Use existing image if upload fails
                }

                if ($this->certi_model->certi_update_data($data, $image)) {
                    redirect("admin/certi/certi_view");
                } else {
                    $data['message'] = '<div class="alert alert-danger"><strong>Error!</strong> Sorry, please try again.</div>';
                }
                $this->load->view('admin/certi/edit_certi', $data);
            }
        } else {
            redirect('admin/auth/login');
        }
    }

    public function certi_delete($id)
    {
        if ($this->session->has_userdata('is_admin_login')) {
            if ($this->certi_model->certi_delete($id)) {
                redirect("admin/certi/certi_view");
            }
        } else {
            redirect('admin/auth/login');
        }
    }
}
