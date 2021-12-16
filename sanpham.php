<?php
    include("pdo.php")
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gp Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.6.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
<header id="header" class="fixed-top ">
<div class="container d-flex align-items-center justify-content-lg-between">

<h1 class="logo me-auto me-lg-0"><a href="index.php">Gp<span>.</span></a></h1>
<!-- Uncomment below if you prefer to use an image logo -->
<!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

<nav id="navbar" class="navbar order-last order-lg-0">
  <ul>
  
    
    <li><a class="nav-link scrollto" href="sanpham.php">Cart</a></li>
   
</nav><!-- .navbar -->

<a href="#about" class="nav-link scrollto">Hello user</a>
<a href="./admin/login.html" class="get-started-btn scrollto">Đăng nhập/Đăng ký</a>

</div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">

<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
  <div class="col-xl-6 col-lg-8">
    <h1>Powerful Digital Solutions With Gp<span>.</span></h1>
    <h2>We are team of talented digital marketers</h2>
  </div>
</div>

<div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
  <div class="col-xl-2 col-md-4">
    <div class="icon-box">
      <i class="ri-store-line"></i>
      <h3><a href="">Lorem Ipsum</a></h3>
    </div>
  </div>
  <div class="col-xl-2 col-md-4">
    <div class="icon-box">
      <i class="ri-bar-chart-box-line"></i>
      <h3><a href="">Dolor Sitema</a></h3>
    </div>
  </div>
  <div class="col-xl-2 col-md-4">
    <div class="icon-box">
      <i class="ri-calendar-todo-line"></i>
      <h3><a href="">Sedare Perspiciatis</a></h3>
    </div>
  </div>
  <div class="col-xl-2 col-md-4">
    <div class="icon-box">
      <i class="ri-paint-brush-line"></i>
      <h3><a href="">Magni Dolores</a></h3>
    </div>
  </div>
  <div class="col-xl-2 col-md-4">
    <div class="icon-box">
      <i class="ri-database-2-line"></i>
      <h3><a href="">Nemos Enimade</a></h3>
    </div>
  </div>
</div>

</div>


</section>
<!--Container-->
<div class="w3-content">
    <h1>Danh Sách Sản Phẩm</h1>
  
    <?php
    $sql = "SELECT * FROM book";
    $objStatement = $objPDO->prepare($sql);
    $objStatement->execute();
    // $n = $objStatement ->rowCount();
    // echo "co $n ket qua";
    $data = $objStatement->fetchAll(PDO::FETCH_OBJ);
    echo "<table border=1>";
        $i=0;
        foreach($data as $r)
        {
            $i++;
            ?>
            <form action="cart.php" method='post'>
                <tr class="ds_sp"> 
                    <input type="hidden" name="DH51800859_id" value='<?php echo $r->book_id ?>'>
                    <input type="hidden" name="DH51800859_name" value='<?php echo $r->book_name ?>'>
                    <input type="hidden" name="DH51800859_img" value='<?php echo $r->img ?>'>
                    <input type="hidden" name="DH51800859_price" value='<?php echo $r->price ?>'>
                    <input type="hidden" name="DH51800859_action" value='add'>

                    <h3><b><?php echo $r->book_name ?></b></h3>
                    <img src='./img/product/<?php echo $r->img ?>'>
                    <p><?php echo $r->price ?> VNĐ 
                    <input type='submit' value='Thêm'></p>
                   
                    <div>
                        <p>
                            <?php echo $r->description ?>
                        </p>
                    </div>
                </tr>
            </form>
            <?php
        }
    ?>
</div>


<!-- Footer -->
<main id="main">
   <?php
// include'./subpage/layout.php'
   ?>




<footer id="footer">
<div class="footer-top">
      <div class="container">
        <div class="row">

        

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

</footer>


<div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  </main>
</body>
</html>