<?php 
include 'netting/baglan.php';


?>
<!--   SİDE BAR     -->

<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="assets/img/user.png" class="img-thumbnail" />

                    <div class="inner-text">
                        Hoşgeldiniz
                        <br>
                        <?php echo $_SESSION['uyegiris'];?>
                    </div>
                </div>

            </li>


            <li>
                <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Anasayfa</a>
            </li>

            <li>
                <a href="ayarlar.php"><i class="fa fa-dashboard "></i>Ayarlar</a>
            </li>

        </div>

    </nav>

        <!-- /. NAV SIDE  -->