<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Habitutor</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../src/assets/img/favicon.png" rel="icon">
  <link href="../src/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../src/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../src/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../src/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../src/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../src/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../src/assets/css/main.css" rel="stylesheet">

</head>
    <?php include '../src/component/layout/header.php'; ?>
<body class="index-page">
        <main class="main">
            <?php
                $hal = @$_GET['hal'];
                $beranda = "../src/pages/beranda.php";
                $p = "../src/pages/$hal.php";
                if(!empty($hal) && file_exists($p)){
                include "$p";
                }else{
                include "$beranda";
                }  
            ?>
        </main>
</body>
    <?php include '../src/component/layout/fouter.php'; ?>
</html>

 <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../src/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../src/assets/vendor/php-email-form/validate.js"></script>
  <script src="../src/assets/vendor/aos/aos.js"></script>
  <script src="../src/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../src/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../src/assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="../src/assets/js/main.js"></script>