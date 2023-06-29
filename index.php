
<!DOCTYPE html>
<html lang="pt-br">

<head>
<?php

include_once './config/constantes.php';
include_once './config/conexao.php';
include_once './func/funcoes.php';
?>

<meta charset="utf-8">

<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Yummy Bootstrap Template - Index</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/main.css" rel="stylesheet">

</head>

<body>
  <main id="main">
    <!-- ======= Header ======= -->
  <?php include_once('header.php');  ?>
  

 <!-- ======= herosection ======= -->

 <?php include_once('herosection.php'); ?>

 

  <?php  
    $listar_banner = listarTodosRegistros('banner','idbanner, titulo, descricao, video, img, cadastro, alteracao, ativo','A');
    
    foreach($listar_banner as $item){
      $titulo = $item -> titulo;
      $descricao = $item -> descricao;
/*       echo "$titulo <br>";
      echo "$descricao<br>"; */
    }
?>


    


    <!-- ======= About Section ======= -->
    <?php include_once('about.php');?>
  
    <!-- ======= Why Us Section ======= -->
    <?php include_once('porquenos.php');?>

    <!-- ======= Stats Counter Section ======= -->
    <?php include_once('statuscontador.php');?>

    <!-- ======= Menu Section ======= -->
    <?php include_once('menu.php');?>

    <!-- ======= Testimonials Section ======= -->
    <?php include_once('depoimentos.php');?>

    <!-- ======= Events Section ======= -->
    <?php include_once('events.php');?>

    <!-- ======= Chefs Section ======= -->
    <?php include_once('chefs.php');?>

    <!-- ======= Book A Table Section ======= -->
    <?php include_once('reserva.php');?>

    <!-- ======= Gallery Section ======= -->
   <?php include_once('galeria.php');?>

    <!-- ======= Contact Section ======= -->
  <?php include_once('contato.php');?>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include_once('footer.php');?>
  <!-- End Footer -->

 

</body>

</html>