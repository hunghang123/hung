<?php

include 'pdo.php';
$sql ='select*from sach';
$objStatement= $objPDO->prepare($sql);
$objStatement->execute();
$data = $objStatement->fetchAll(PDO::FETCH_OBJ );

$sql ='select*from nhaxb';
$objStatement=$objPDO->prepare($sql);
$objStatement->execute();
$dataNxb = $objStatement->fetchAll(PDO::FETCH_OBJ);

$sql = 'select*from loai';
$objStatement= $objPDO->prepare($sql);
$objStatement->execute();
$dataLoai = $objStatement->fetchAll(PDO::FETCH_OBJ);

$kw = isset($_GET['DH51800859_kw'])?$_GET['DH51800859_kw']:'';
$sql="select * from sach where tensach like ? ";
$a =["%$kw%"];
$objStatement= $objPDO->prepare($sql);//return B
$objStatement->execute($a);//ket qua truy van
$n = $objStatement->rowCount();
// echo "Co $n ket qua";
$data = $objStatement->fetchAll(PDO::FETCH_OBJ );
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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
   <?php
include'./subpage/header.php'
   ?>
  </section><!-- End Hero -->


  <main id="main">
   <?php
// include'./subpage/layout.php'
   ?>
  </main><!-- End #main -->





  
    <div class="container-fluid">
    <table class="table table-striped table-bordered table-hover" border="1">
                        <h4>Hàng Ngọc Hưng_DH51800859_D18-TH03</h4>
                        <?php
    echo "Co $n ket qua";
         ?>
                        <tr>
                            <td>Mã sách</td>
                            <td>Tên sách</td>
                            <td>Mô tả</td>
                            <td>Gía</td>
                            <td>Mã NXB</td>
                            <td>Mã loại</td>
                            <td>hình ảnh</td>
                            
                         
                        </tr>
                        <?php
                         // var_dump($data);
                         foreach($data as $r)
                         {
                             ?>
                             <tr>
                                 <td><?php echo $r->masach ?></td>
                                 <td><?php echo $r->tensach ?></td>
                                 <td><?php echo $r->mota ?></td>
                                 <td><?php echo $r->gia ?></td>
                                 <td><?php echo $r->manxb ?></td>
                                 <td><?php echo $r->maloai ?></td>
                                 <td><img src='./img/product/<?php echo $r->hinh ?>'> </td>
                              
                                
                             </tr>
                             <?php 
                         }
                         ?>
                      
                        </table>
                        </div>
					</div>






  <!-- ======= Footer ======= -->
  <footer id="footer">
    <?php
include'./subpage/footer.php'
    ?>
  </footer><!-- End Footer -->














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

</body>

</html>