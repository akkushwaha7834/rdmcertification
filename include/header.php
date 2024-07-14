<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/images/favicon.png" rel="icon">
  <title>RDM</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/animate/animate.min.css">
  <link rel="stylesheet" href="assets/css/swiper/swiper-bundle.min.css">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/css/fonts/remixicon.css">
  <!-- Custom Style File -->
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
  <!-- Header Start  -->
  <div class="bg-dark">
    <div class="container bg-dark">
      <div class="top-menu-bar py-1 d-flex align-item-center justify-content-between ">
        <div>
          <ul>
            <li class=""><a href="tel:+917701949495"><span><i class="ri-phone-line"></i></span> <span>+91-7701949495</span></a></li>
            <li class=""><a href="mailto:info.rdmcertification@gmail.com"><span><i class="ri-mail-line"></i></span> <span>info.rdmcertification@gmail.com</span></a></li>
          </ul>
        </div>
        <!-- <div class="login-menu">
          <ul>
            <li>
              <a href="login.php" class="link d-flex align-items-center">Login <i class=" ps-1 ri-arrow-right-line"></i></a>
            </li>
            <li>
              <a href="signup.php" class="link d-flex align-items-center">Sign Up <i class="ps-1 ri-arrow-right-line"></i></a>
            </li>
          </ul>
        </div> -->
      </div>
    </div>
  </div>
  <header class="header sticky-top">
    <nav class="navbar navbar-expand-lg p-0">
      <div class="container">
        <a class="navbar-brand py-2" href="index.php"><img src="assets/images/RDM-Logo_tm.jpg" alt="Logo" width="100%"></a>
        <button class="mobile-menu-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
          <span class="toggler-icon ri-menu-2-line"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
              
            </li>

            <li class="nav-item">
              <a class="nav-link" href="franchise.php">About Us</a>
            </li>
            <li class="nav-item menu-item-has-children">
              <a class="nav-link" href="#">Services <i class="ri-arrow-down-s-line"></i></a>
              <ul class="sub-menu">
                <li><a href="offline-courses.php">Certificates</a></li>
                <li><a href="online-courses.php">IT Services</a></li>
              </ul>
            </li>
            <li class="nav-item menu-item-has-children">
              <a class="nav-link" href="#">Download <i class="ri-arrow-down-s-line"></i></a>
              <ul class="sub-menu">
                <li><a href="">Application Form</a></li>
                <li><a href="">Rules for Multi-site Organisation</a></li>
                <li><a href="">Certification Agreement Rules</a></li>
                <li><a href="">Logo Guidleines</a></li>
                <li><a href="">Quotation Form</a></li>
              </ul>
            </li>
            
            

            <li class="nav-item">
              <a class="nav-link" href="#">Onilne Application</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Career</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
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
            <li><a href="./" class="menu-link">Home</a></li>
            <li>
              <a role="button" class="menu-link moblie-dropdwon">About Us <i class="ri-arrow-down-s-line"></i></a>
              <div class="dropdown-mb-menu">
                <ul>
                  <li><a href="about.php">Company</a></li>
                  <li><a href="gallery.php">Gallery</a></li>               
                  <li><a href="careers.php">Careers</a></li>
                </ul>
              </div>
            </li>
            <li><a href="franchise.php" class="menu-link">Franchise</a></li>
            <li><a role="button" class="menu-link moblie-dropdwon">Courses <i class="ri-arrow-down-s-line"></i></a>
              <div class="dropdown-mb-menu">
                <ul>
                  <li><a href="offline-courses.php">Offline Courses</a></li>
                  <li><a href="online-courses.php">Online Coueses</a></li>
                </ul>
              </div>
            </li>
            <li><a href="e-books.php" class="menu-link">E-books</a></li>
            <li><a href="" class="menu-link moblie-dropdwon">Analysis <i class="ri-arrow-down-s-line"></i></a>
            <div class="dropdown-mb-menu">
                <ul>
                  <li><a href="market-primer.php">Market Primer</a></li>
                  <li><a href="currency-report.php">Currency Report</a></li>
                </ul>
              </div>
          </li>
            <li><a href="blog.php" class="menu-link">Blog</a></li>
            <li><a href="contact.php" class="menu-link">Contact</a></li>
          </ul>
          <div class="login-btn">
            <a href="login.php" class="theme-btn">Login <i class="ri-arrow-right-line"></i></a>
            <a href="signup.php" class="theme-btn">Sign Up <i class="ri-arrow-right-line"></i></a>
          </div>
        </div>
      </div>
    </div>
  </header>