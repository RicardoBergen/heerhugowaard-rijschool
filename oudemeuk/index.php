<!DOCTYPE html>
<?php include('functions.php') ?>
<html lang="nl" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Rijschool Heerhugowaard</title>
  <link rel="stylesheet" type="text/css" href="css/vormgeving.css">
</head>
<body>
  <div class="menu">
    <?php include('pages/menu.php'); ?>
  </div>
  <div class="content">
    <?php
      if(empty($_GET['page'])){
        include('pages/home.php');
      }elseif($_GET['page']=='contact') {
        include('pages/contact.php');
      }elseif($_GET['page']=='geslaagd1') {
        include('images/geslaagd1.png');
      }elseif($_GET['page']=='geslaagd2') {
        include('images/geslaagd2.png');
      }elseif($_GET['page']=='geslaagd3') {
        include('images/geslaagd3.png');
      }elseif($_GET['page']=='geslaagd4') {
        include('images/geslaagd4.png');
      }elseif($_GET['page']=='geslaagd5') {
        include('images/geslaagd5.png');
      }elseif($_GET['page']=='geslaagd6') {
        include('images/geslaagd6.png');
      }elseif($_GET['page']=='geslaagd7') {
        include('images/geslaagd7.png');
      }elseif($_GET['page']=='geslaagd8') {
        include('images/geslaagd8.png');
      }elseif($_GET['page']=='geslaagd9') {
        include('images/geslaagd9.png');
      }elseif($_GET['page']=='geslaagd10') {
        include('images/geslaagd10.png');
      }elseif($_GET['page']=='geslaagd11') {
        include('images/geslaagd11.png');
      }elseif($_GET['page']=='geslaagd12') {
        include('images/geslaagd12.png');
      }elseif($_GET['page']=='geslaagd13') {
        include('images/geslaagd13.png');
      }else{
        include('pages/home.php');
      }
     ?>
   </div>
</body>
