															<!--  lédmin Baslangic -->

<?php 
include 'adminp/netting/baglan.php';

$ayarcek=$db->query("SELECT * FROM ayarlar", PDO::FETCH_ASSOC);

foreach ($ayarcek as $ayaryaz) {

}

?>

<html lang="tr">
                                                            
<title><?php echo $ayaryaz['market_baslik']; ?></title>
                                                            
<!--	CSS	 	-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/custom.css">

    <!--
	<body oncontextmenu="return false;">
	-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Site Metas -->
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Site Icons -->
        <link rel="shortcut icon" href="" type="image/x-icon">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  </head>
  <!-- HEADER -->
  <header class="main-header" style="position: fixed; right: 0; left: 0; top:0; z-index: 10; ">
    <!-- Start Navigation -->
    <nav  class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                 <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item active"><a href="https://site.com/market" class="nav-link" >Ana Sayfa</a>
                     <li class="nav-item active"><a href="https://site.com/forum" class="nav-link" target="_blank">Forum</a>

                </ul>
         </div>				
     </div>
 </div>

</nav>
</header>		  			  

<div class="latest-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                 <br>
                 <h1>Ürünler</h1>
                 <p></p>
             </div>
         </div>
     </div>
     <div class="row">


        <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="blog-box">
                <div class="blog-img">
                    <img class="img-fluid" src="images/paketler/bronze.png" alt="" />
                </div>
                <div style="height: 400px;"class="blog-content">
                    <div class="title-blog">                             
                        <h3><?php echo $ayaryaz['vip1_paketismi'];?></h3>
                        <p style="overflow-y:hidden;height: 190px;">
                            <?php echo $ayaryaz['vip1_paketaciklama'];?><br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />                                           
                            <form><b><a name="detay" type="submit" href="paketler/paket_1.php">DEVAM ET</a></b></form>
                            <h3 style="text-align:center;"><?php echo $ayaryaz['vip1_paketfiyat'];?>TL</h3>
                        </p>
                        
                    </div>
                    
                    <ul class="option-blog">
                        <li><a target="_blank" href="site.com"><i class="fas fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="blog-box">
                <div class="blog-img">
                    <img class="img-fluid" src="images/paketler/silver.png" alt="" />
                </div>
                <div style="height: 400px;"class="blog-content">
                    <div class="title-blog">

                       <h3><?php echo $ayaryaz['vip2_paketismi'];?></h3>
                       <p style="overflow-y:hidden;height: 190px;">
                        <?php echo $ayaryaz['vip2_paketaciklama'];?><br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />                                               
                        <form><b><a name="detay" type="submit" href="paketler/paket_1.php">DEVAM ET</a></b></form>
                        <h3 style="text-align:center;"><?php echo $ayaryaz['vip2_paketfiyat'];?>TL</h3>
                    </p>
                    
                </div>
                
                <ul class="option-blog">
                    <li><a target="_blank" href="site.com"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
    </div>			

    <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="blog-box">
                <div class="blog-img">
                    <img class="img-fluid" src="images/paketler/silver.png" alt="" />
                </div>
                <div style="height: 400px;"class="blog-content">
                    <div class="title-blog">

                       <h3><?php echo $ayaryaz['vip3_paketismi'];?></h3>
                       <p style="overflow-y:hidden;height: 190px;">
                        <?php echo $ayaryaz['vip3_paketaciklama'];?><br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />                                               
                        <form><b><a name="detay" type="submit" href="paketler/paket_1.php">DEVAM ET</a></b></form>
                        <h3 style="text-align:center;"><?php echo $ayaryaz['vip3_paketfiyat'];?>TL</h3>
                    </p>
                    
                </div>
                
                <ul class="option-blog">
                    <li><a target="_blank" href="site.com"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
    </div>			
    <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="blog-box">
                <div class="blog-img">
                    <img class="img-fluid" src="images/paketler/silver.png" alt="" />
                </div>
                <div style="height: 400px;"class="blog-content">
                    <div class="title-blog">

                       <h3><?php echo $ayaryaz['vip4_paketismi'];?></h3>
                       <p style="overflow-y:hidden;height: 190px;">
                        <?php echo $ayaryaz['vip4_paketaciklama'];?><br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />                                               
                        <form><b><a name="detay" type="submit" href="paketler/paket_1.php">DEVAM ET</a></b></form>
                        <h3 style="text-align:center;"><?php echo $ayaryaz['vip4_paketfiyat'];?>TL</h3>
                    </p>
                    
                </div>
                
                <ul class="option-blog">
                    <li><a target="_blank" href="site.com"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
    </div>			


</div>
</div>
</div>



<div class="footer-copyright" style="position: relative;">
    <p class="footer-company">© 2022 lédmin</p>
</div>

<a href="#" id="back-to-top" title="Back to top">&uarr;</a>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery.superslides.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<!--	Right Click Block	 -->

<SCRIPT LANGUAGE="Javascript"><!--
    var isNS = (navigator.appName == "Netscape") ? 1 : 0;
    var EnableRightClick = 0;
    if(isNS)
        document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
    function mischandler(){
        if(EnableRightClick==1){ return true; }
        else {return false; }
    }
    function mousehandler(e){
        if(EnableRightClick==1){ return true; }
        var myevent = (isNS) ? e : event;
        var eventbutton = (isNS) ? myevent.which : myevent.button;
        if((eventbutton==2)||(eventbutton==3)) return false;
    }
    function keyhandler(e) {
        var myevent = (isNS) ? e : window.event;
        if (myevent.keyCode==96)
            EnableRightClick = 1;
        return;
    }
    document.oncontextmenu = mischandler;
    document.onkeypress = keyhandler;
    document.onmousedown = mousehandler;
    document.onmouseup = mousehandler;

</script> 




