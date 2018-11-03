<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <!-- Favicon -->
  <link href="views/images/favicon.ico" rel="icon" type="image/x-icon" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="views/css/font-awesome.min.css">
  <link rel="stylesheet" href="views/css/fonts.css">
  
  <title>Document</title>
  <!-- Menu mobile css -->
  <link rel="stylesheet" href="views/css/menu.css">

  <!-- Styles for page -->
  <link rel="stylesheet" href="views/css/style.css">
  <link rel="stylesheet" href="views/css/jquery.accordion.css">
  
</head>
<body class='layout-v2'>
  <div id='wrap'>
    <!-- Begin header section -->
    <?php include 'modules/partials/header.php' ?>
    <!-- End Header section -->

 
    <!-- Begin Content page section -->
    <?php
      if(isset($_GET["path"])){
        if($_GET["path"] == "home"){
          include "modules/partials/home.php";
        }
        if ($_GET["path"] == "listview"||
            $_GET["path"] == "gridview"||
            $_GET["path"] == "displayview"||
            $_GET["path"] == "micuenta"||
            $_GET["path"] == "create-sale"||
            $_GET["path"] == "create-report"||
            $_GET["path"] == "clients" ||
            $_GET["path"] == "salir") {

          include "modules/".$_GET["path"].".php";
        
        }else{
            include "modules/404.php";
        }
      }else{
        include "modules/partials/home.php";
      }
    ?>
    <!-- End Content page section -->

    <!-- Begin Footer section    -->
    <?php include "modules/partials/footer.php"; ?>
    <!-- Begin Footer section    -->
  </div>
  <script src="views/js/jquery-2.2.0.min.js"></script>
  <script src="views/js/plugins/jquery-ui.min.js"></script>
  <script src="views/js/plugins/mmenu.min.js"></script>
  <script src="views/js/plugins/bootstrap.min.js"></script>
  <script src="views/js/plugins/accordion.min.js"></script>
  <script src="views/js/plugins/responsive.tabs.min.js"></script>
  <script src="views/js/plugins/responsive.table.min.js"></script>
  <script src="views/js/plugins/owl.carousel.min.js"></script>
  <script src="views/js/store.js"></script>
</body>
</html>