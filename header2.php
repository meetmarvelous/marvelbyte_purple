<?php
  include "include/dbcon.php";
  // session_start();

  $collect = mysqli_query($dbcon, "SELECT * FROM site_info where site_id='10' ");
  $site = mysqli_fetch_array($collect);
  
?>


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title><?php echo $site['webname']; ?></title>
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo './assets/images/'.$site["icon"];?>">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="./assets/css/fontawesome.css" rel="stylesheet" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- awesome fontfamily -->
  <script src="https://use.fontawesome.com/49ad193de7.js"></script>

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <!-- Owl Carousel  -->  

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  <!-- Custom styles for this template -->
  <link href="./assets/style.css" rel="stylesheet" />
  <link href="./assets/tech.css" rel="stylesheet" />

  <link href="./assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="./assets/css/responsive.css" rel="stylesheet" />

</head>