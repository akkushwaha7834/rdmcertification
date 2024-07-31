<?php
defined('BASEPATH') or exit('No direct script access allowed');

class contact extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(['url', 'form', 'cookie', 'security']);
        $this->load->library(['pagination', 'session', 'email', 'form_validation', 'encryption']);
        $this->load->model('admin/contact_model', 'contact_model');
        date_default_timezone_set('Asia/Kolkata');
    }

    public function add_contact()
    {
        $data['view'] = 'admin/frontend/contact';
        $this->load->view('admin/layout', $data);
    }

    public function contact_submit_data()
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            if ($this->contact_model->contact_data_submit($data)) {
                redirect(base_url());
            } else {
                $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                $this->load->view('admin/layout', $data);
            }
        }
    }

    public function contact_view()
    {
        $data['contact_view'] = $this->contact_model->contact_view();
        $data['view'] = 'admin/contact/view_contact';
        $this->load->view('admin/layout', $data);
    }

    public function contact_edit($id)
    {
        $id = $this->uri->segment(4);
        $data['view_contact'] = $this->contact_model->contact_edit($id);
        $data['view'] = 'admin/contact/edit_contact';
        $this->load->view('admin/layout', $data);
    }

    public function contact_update_data()
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            if ($this->contact_model->contact_update_data($data)) {
                redirect("admin/contact/view_contact");
            } else {
                $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                $this->load->view('admin/layout', $data);
            }
        }
    }

    public function contact_delete($id)
    {
        $id = $this->uri->segment(4);
        if ($this->contact_model->contact_delete($id)) {
            redirect("admin/contact/contact_view");
        }
    }
    public function submit() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('frontend/contact');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $message = $this->input->post('message');
            $subject = $this->input->post('Subject');


            // Format the SMS message
            $sms_message = "New contact form submission:\n\n";
            $sms_message .= "Name: $name\n";
            $sms_message .= "Email: $email\n";
            $sms_message .= "Message: $message";
            $sms_message .= "Message: $subject";

            // Send the SMS
            $to = '9990400733';  // Your phone number
            if ($this->twilio->send_sms($to, $sms_message)) {
                echo 'Thank you for contacting us. We will get back to you shortly.';
            } else {
                echo 'Failed to send notification. Please try again later.';
            }
        }
    }
}
?>
