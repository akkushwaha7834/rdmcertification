<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?=base_url()?>public/web/assets/images/favicon.png" rel="icon">
  <title>RDM</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?=base_url()?>public/web/assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>public/web/assets/css/animate/animate.min.css">
  <link rel="stylesheet" href="<?=base_url()?>public/web/assets/css/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?=base_url()?>public/web/assets/css/odometer/odometer.min.css">
  <!-- Icons -->
  <link rel="stylesheet" href="<?=base_url()?>public/web/assets/css/fonts/remixicon.css">
  <!-- Custom Style File -->
  <link rel="stylesheet" href="<?=base_url()?>public/web/assets/css/style.css">

</head>

<body>
  <!-- Header Start  -->
  <div class="bg-dark">
    <div class="container bg-dark">
      <div class="top-menu-bar py-2 d-flex align-item-center justify-content-between ">
        <div>
          <ul>
            <li class=""><a href="tel:+917701949495"><span><i class="ri-phone-line"></i></span> <span>+91-7701949495</span></a></li>
            <li class=""><a href="mailto:info.rdmcertification@gmail.com"><span><i class="ri-mail-line"></i></span> <span>info.rdmcertification@gmail.com</span></a></li>
          </ul>
        </div>
        <div class=" d-flex align-items-center justify-content-end flex-wrap">
          <h5 class="text-white mb-0 ">Follow us:</h5>
        <ul class="ps-3">
            <li><a href="https://www.facebook.com/rdmcertification/" target="_blank"><i class="ri-facebook-fill"></i></a></li>
            <li><a href="https://www.instagram.com/rdmcertification/" target="_blank"><i class="ri-instagram-line"></i></a></li>
            <li><a href="https://www.linkedin.com/in/rdm-certification-services-91ab721a2/" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
            <li><a href="https://x.com/i/flow/login?redirect_after_login=%2Fservicerdm" target="_blank" class="pe-0"><i class="ri-twitter-x-fill"></i></a></li>
          
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <header class="header sticky-top">
    <nav class="navbar navbar-expand-lg p-0">
      <div class="container">
        <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url()?>public/web/assets/images/RDM-Logo_tm.jpg" alt="Logo" width="100%"></a>
        <button class="mobile-menu-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
          <span class="toggler-icon ri-menu-2-line"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>">Home</a>              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>about">About Us</a>
            </li>
            <li class="nav-item menu-item-has-children">
              <a class="nav-link" href="#">Services <i class="ri-arrow-down-s-line"></i></a>
              <ul class="sub-menu">
                <li><a href="<?=base_url()?>certificates">Certificates</a></li>
                <li><a href="<?=base_url()?>it-services">IT Services</a></li>
              </ul>
            </li>
            <li class="nav-item menu-item-has-children">
              <a class="nav-link" href="#">Download <i class="ri-arrow-down-s-line"></i></a>
              <ul class="sub-menu">
                <li><a href="<?=base_url()?>public/web/assets/images/pdf/Application-Form.pdf" target="_blank">Application Form</a></li>
                <li><a href="<?=base_url()?>public/web/assets/images/pdf/Rules-and-regulations-for-multi.pdf">Rules for Multi-site Organisation</a></li>
                <li><a href="<?=base_url()?>public/web/assets/images/pdf/Certification-Agreement-Rules.pdf" target="_blank">Certification Agreement Rules</a></li>
                <li><a href="<?=base_url()?>public/web/assets/images/pdf/Logo-Guidleines.pdf" target="_blank">Logo Guidleines</a></li>
                <li><a href="<?=base_url()?>public/web/assets/images/pdf/Quotation-Form.pdf" target="_blank">Quotation Form</a></li>
              </ul>
            </li>
            
            

            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>online-application">Onilne Application</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>career">Career</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="offcanvas offcanvas-end mobile-menu" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header justify-content-end">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body p-0">
        <div class="mobile-menu-wrap">
          <ul class="mobile-menu-list">
            <li><a href="<?=base_url()?>" class="menu-link">Home</a></li>
     
            <li><a href="<?=base_url()?>about" class="menu-link">About Us</a></li>
            <li><a role="button" class="menu-link moblie-dropdwon">Services <i class="ri-arrow-down-s-line"></i></a>
              <div class="dropdown-mb-menu">
                <ul>
                  <li><a href="#">ISO Certification</a></li>
                  <li><a href="#">It Services</a></li>
                </ul>
              </div>
            </li>
           
            <li><a role="button" class="menu-link moblie-dropdwon">Download <i class="ri-arrow-down-s-line"></i></a>
            <div class="dropdown-mb-menu">
            <ul>
                <li><a href="https://rdmcertification.com/wp-content/uploads/2022/01/Application-Form.pdf" target="_blank">Rules for Multi-site Organisation</a></li>
                <li><a href="" target="_blank">Rules for Multi-site Organisation</a></li>
                <li><a href="" target="_blank">Certification Agreement Rules</a></li>
                <li><a href="" target="_blank">Logo Guidleines</a></li>
                <li><a href="" target="_blank">Quotation Form</a></li>
                </ul>
              </div>
          </li>
            <li><a href="#" class="menu-link">Online Application</a></li>
            <li><a href="<?=base_url()?>career" class="menu-link">Career</a></li>
            <li><a href="<?=base_url()?>contact" class="menu-link">Contact Us</a></li>
          </ul>

        </div>
      </div>
    </div>
  </header>