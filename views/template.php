<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>POS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/adminlte.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="views/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="views/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href=views/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>
<body class="hold-transition sidebar-mini login-page">
<!-- Site wrapper -->


    <?php 
      if (isset($_SESSION["BeginSession"]) && $_SESSION["BeginSession"] == "ok") {

      
        echo '<div class="wrapper">';
        include_once("modules/header.php");
        include_once("modules/menu.php");
        if (isset($_GET['root'])) {
          if($_GET['root'] == "home" ||
             $_GET['root'] == "users" ||
             $_GET['root'] == "invoices" ||
             $_GET['root'] == "payments" ||
             $_GET['root'] == "collect-payments" ||
             $_GET['root'] == "jobs" ||
             $_GET['root'] == "outsource" || 
             $_GET['root'] == "products" || 
             $_GET['root'] == "clients" || 
             $_GET['root'] == "sales" || 
             $_GET['root'] == "services" || 
             $_GET['root'] == "quotations" ||
             $_GET['root'] == "purchase" || 
             $_GET['root'] == "parts" || 
             $_GET['root'] == "back-up-drives" || 
             $_GET['root'] == "reports" || 
             $_GET['root'] == "employees" || 
             $_GET['root'] == "leads" || 
             $_GET['root'] == "expenses" || 
             $_GET['root'] == "pick-up-drops" || 
             $_GET['root'] == "tasks" || 
             $_GET['root'] == "categories" ||
             $_GET['root'] == "logout") {
             include_once("modules/" . $_GET['root'] .".php");
          } else {
             include_once("modules/404.php");
          }
        }
        include_once("modules/footer.php");
        echo "<div>";
      } else {
        include_once("modules/login.php");
      }
    ?>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="views/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="views/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="views/dist/js/demo.js"></script>
<script src="views/js/template.js"></script>

<!-- DataTables  & Plugins -->
<script src="views/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="views/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="views/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="views/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="views/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="views/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="views/plugins/jszip/jszip.min.js"></script>
<script src="views/plugins/pdfmake/pdfmake.min.js"></script>
<script src="views/plugins/pdfmake/vfs_fonts.js"></script>
<script src="views/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="views/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="views/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="views/js/main.js"></script>
</body>
</html>
