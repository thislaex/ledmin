<?php 
ob_start();
session_start();


include 'netting/baglan.php';

$ayarcek=$db->query("SELECT * FROM ayarlar", PDO::FETCH_ASSOC);

foreach ($ayarcek as $ayaryaz) {

}


if (!isset($_SESSION['uyegiris'])) {
    
    header('Location:login.php');
}
/*
function giriskontrol () {

    $admin_kadi=$_SESSION['uyegiris'];
    $adminsor=$db->query("select * from admin where admin_kadi='$admin_kadi'");
    $adminsay=$adminsor->rowCount();

    if ($adminsay==0) {
        header('Location:login.php');
    }
 
}

giriskontrol();*/
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>lédmin Panel</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><b style="font-style: 2px;">lédmin System v0.9.9</b></a>
            </div>

            <div class="header-right">

                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="logout.php" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle"> Güvenli Çıkış </i></a>

            </div>
        </nav>