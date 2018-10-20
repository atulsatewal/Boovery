<?php
require("secure/db_connect.php");
require("secure/functions.php");
require("secure/config.php");

sec_session_start();

$page = basename($_SERVER['PHP_SELF']);
$getpage = explode('.',$page);
$currentPage = $getpage[0];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>👤BOOVERY.COM[ADMIN PANNEL]</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="dist/css/font-awesome.min.css">
  <!-- Ionicons -->
    <link rel="stylesheet" href="dist/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
<link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="plugins/select2/select2.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    .alert {
      position: fixed;
      top: 10%;
      bottom: auto;
      right: 10%;
      left: auto;
      display: block;
      z-index: 1;
    }
      #dependent1,#dependent2,#dependent3,#dependent4,#dependent5{
          display: none;
      }
</style>
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
<header class="main-header">

    <!-- Logo -->
      <a class="logo" href="#">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">👤</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">📚BOOVERY.COM</span>
      </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
    </nav>
  </header>
<?php include ("nav.php"); ?>