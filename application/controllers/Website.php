<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Website extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('admin/certi_model','certi_model');
    }

    public function index()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/index');
        $this->load->view('frontend/include/footer');
    }

    public function about()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/about');
        $this->load->view('frontend/include/footer');
    }

    public function career()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/career');
        $this->load->view('frontend/include/footer');
    }

    public function certificate_single($name)
    {
        $data['certificate_view'] = $this->certi_model->certi_view();
        $data['certificate'] = $this->certi_model->certi_data_nm($name);
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/certificate-single',$data);
        $this->load->view('frontend/include/footer');
    }

    public function certificates()
    {
        $data['certificate_view'] = $this->certi_model->certi_view();

        $this->load->view('frontend/include/header');
        $this->load->view('frontend/certificates',$data);
        $this->load->view('frontend/include/footer');
    }

    public function contact()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/contact');
        $this->load->view('frontend/include/footer');
    }

    public function it_service_single()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/it-service-single');
        $this->load->view('frontend/include/footer');
    }

    public function it_services()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/it-services');
        $this->load->view('frontend/include/footer');
    }

    public function online_application()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/online-application');
        $this->load->view('frontend/include/footer');
    }


}
?>