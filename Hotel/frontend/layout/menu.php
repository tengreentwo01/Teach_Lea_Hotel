<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education Meeting HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../public/assets/css/fontawesome.css">
    <link rel="stylesheet" href="../public/assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="../public/assets/css/owl.css">
    <link rel="stylesheet" href="../public/assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

<!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>This is an educational <em>HTML CSS</em> template by TemplateMo website.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        Edu Meeting
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
            <?php
              $current_page = basename($_SERVER['PHP_SELF']); // รับชื่อไฟล์ปัจจุบัน
              ?>
              <ul class="nav">
                  <li class="scroll-to-section">
                      <a href="../frontend/index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Home</a>
                  </li>
                  <li class="scroll-to-section">
                      <a href="../frontend/about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About</a>
                  </li>
                  <li class="scroll-to-section">
                      <a href="../frontend/request.php" class="<?= $current_page == 'request.php' ? 'active' : '' ?>">Request</a>
                  </li> 
                  <li class="scroll-to-section">
                      <a href="../frontend/contact.php" class="<?= $current_page == 'contact.php' ? 'active' : '' ?>">Contact Us</a>
                  </li> 
                  <li class="scroll-to-section">
                      <a href="./auth/login.php" class="<?= $current_page == 'login.php' ? 'active' : '' ?>">Login Member</a>
                  </li> 
              </ul>       
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->