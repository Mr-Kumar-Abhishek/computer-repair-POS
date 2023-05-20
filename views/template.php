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
  <link rel="stylesheet" href="views/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini login-page">
<!-- Site wrapper -->


    <?php 
      if (isset($_SESSION["BeginSession"]) && $_SESSION["BeginSession"] == "") {

      
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
             $_GET['root'] == "categories") {
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
</body>
</html>
