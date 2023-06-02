<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pizzaria</title>
  <meta content="Pizza gostosa e barata" name="description">
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

  <?php
  include_once("./config/constantes.php");
  include_once("./config/conexao.php");

  include_once("./func/func.php");
  ?>

</head>

<body>

  <!-- HEADER -->
  <?php include_once("./components/menutopo.php"); ?>
  <!-- FIM HEADER -->

  <!-- BANNER -->
  <?php include_once("./components/banner.php"); ?>
  <!-- FIM BANNER -->

  <main id="main"> <!-- INICIO MAIN -->

    <!-- SOBRE NOS/ABOUT US -->
    <?php include_once("./components/sobre.php"); ?>
    <!-- FIM SOBRE NOS/ABOUT US -->

    <!-- WHY US -->
    <?php include_once("./components/whyus.php"); ?>
    <!-- FIM WHY US -->

    <!-- STATUS -->
    <?php include_once("./components/status.php"); ?>
    <!-- FIM STATUS -->

    <!-- MENU- -->
    <?php include_once("./components/menu.php"); ?>
    <!-- FIM MENU -->

    <!-- AVALIAÇÃO -->
    <?php include_once("./components/avaliacao.php"); ?>
    <!-- FIM AVALIAÇÃO -->

  </main> <!-- FIM MAIN  -->

  <!-- EVENTOS -->
  <?php include_once("./components/eventos.php"); ?>
  <!-- FIM EVENTOS -->

  <!-- CHEFE -->
  <?php include_once("./components/chefe.php"); ?>
  <!-- FIM CHEFE -->

  <!-- BOOKS -->
  <?php include_once("./components/books.php"); ?>
  <!-- FIM BOOKS -->

  <!-- GALERIA -->
  <?php include_once("./components/galeria.php"); ?>
  <!-- FIM GALERIA -->

  <!-- CONTATOS -->
  <?php include_once("./components/contatos.php"); ?>
  <!-- FIM CONTATOS -->

  </main><!-- FIM MAIN -->

  <!-- FOOTER -->
  <?php include_once("./components/footer.php"); ?>
  <!-- FIM FOOTER -->

  <!-- SCRIPTS -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>