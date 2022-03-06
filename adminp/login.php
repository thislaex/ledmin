<?php 
include 'netting/baglan.php';
ob_start(); 
session_start();

if (!isset($_SESSION['uyegiris'])) {
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Bootstrap Advance Admin Template</title>

  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <style>
  body {
    background-image: url("assets/img/custom/walpapper.jpg");
    background-attachment: fixed;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    -webkit-background-size: 100% 100%;
    background-size: 100% 100%;
}
</style>
</head>
<body >
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                <div style="background-color: white; opacity: 0.8; margin-top: 40px;" class="panel-body">
                    <form action="#" method="POST">                       
                        <?php 
                        if (isset($_POST['uyegiris'])) {
                            $admin_kadi=$_POST['admin_kadi'];
                            $admin_sifre=md5($_POST['admin_sifre']);


                            if ($admin_kadi && $admin_sifre) {

                               $kullanicisor=$db->prepare("SELECT * from admin where admin_kadi=:ad and admin_sifre=:password");
                               $kullanicisor->execute(array(
                                'ad' => $admin_kadi,
                                'password' => $admin_sifre
                            ));
                               echo $say=$kullanicisor->rowCount();
                               if ($say>0) {
                                echo $_SESSION['uyegiris'] = $admin_kadi;    
                                header('Location:../adminp/index.php');
                            } else {
                                header('Location:../adminp/login.php');
                            }
                        } 
                    } 
                    ?>                       
                    <hr />
                    <center><h3><b>YÖNETİCİ GİRİŞ</b></h3></center>
                    <br />                         
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                        <input type="text" class="form-control" name="admin_kadi" placeholder="Kullanıcı Adı " />
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                        <input type="password" class="form-control" name="admin_sifre" placeholder="Şifre" />
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" /> Hatırla
                        </label>
                        <br>
                        <br>                        
                    </div>
                    <button style="width: 100%" type="submit" name="uyegiris" class="btn btn-primary">GİRİŞ </button>                  
                    <hr />
                </form>
            </div>

        </div>


    </div>
</div>

</body>
</html>

