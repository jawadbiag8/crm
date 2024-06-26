<?php 

ob_start();

if(!isset($_SESSION)){

  session_start();

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="ZoneElectronics merchant, Business Management System">

  <title>ZoneElectronics| Merchnat</title>

  <link rel="stylesheet" href="../common/plugins/fontawesome-free/css/all.min.css">

  <!-- Ionicons -->

  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->

  <!-- Tempusdominus Bootstrap 4 -->

  <link rel="stylesheet" href="../common/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <!-- iCheck -->

  <link rel="stylesheet" href="../common/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- JQVMap -->

  <link rel="stylesheet" href="../common/plugins/jqvmap/jqvmap.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="../common/dist/css/adminlte.min.css">

  <!-- overlayScrollbars -->

  <link rel="stylesheet" href="../common/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <link rel="stylesheet" href="../common/plugins/chart.js/Chart.min.css">

  <link rel="stylesheet" href="../common/plugins/chart.js/Chart.css">

  <!-- Daterange picker -->

  <link rel="stylesheet" href="../common/plugins/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="../common/plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="../common/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <link rel="stylesheet" href="../common/plugins/toastr/toastr.min.css">

  <link rel="stylesheet" href="../common/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="../common/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    



  <?php include("../common/lib/conn.php");?>

</head>





