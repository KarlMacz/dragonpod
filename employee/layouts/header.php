<?php
  require_once('../core/init.php');

  if(!Auth::check() || Auth::account()->type !== 'Employee') {
    header('Location: ./../');
  }
?>
<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo config('app.name'); ?></title>
  <link rel="shortcut icon" href="../assets/images/logo.png">
  <!-- CSS Files -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/css/custom.min.css">
  <!-- FontAwesome -->
  <script src="../assets/js/all.min.js"></script>
  <!-- Typed.js -->
  <script src="../assets/js/typed.min.js"></script>
  <!-- JS Files -->
  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/jquery.dataTables.min.js"></script>
  <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/script.js"></script>
</head>
<body>
