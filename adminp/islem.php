<?php 
ob_start();
session_start();
include 'netting/baglan.php';

if (isset($_POST['ayargonder'])) {

    $market_baslik=$_POST['market_baslik'];


    $vip1_paketismi=$_POST['vip1_paketismi'];
    $vip2_paketismi=$_POST['vip2_paketismi'];
    $vip3_paketismi=$_POST['vip3_paketismi'];
    $vip4_paketismi=$_POST['vip4_paketismi'];
    $vip1_paketfiyat=$_POST['vip1_paketfiyat'];
    $vip2_paketfiyat=$_POST['vip2_paketfiyat'];
    $vip3_paketfiyat=$_POST['vip3_paketfiyat'];
    $vip4_paketfiyat=$_POST['vip4_paketfiyat'];

    $vip1_paketaciklama=$_POST['vip1_paketaciklama'];
    $vip2_paketaciklama=$_POST['vip2_paketaciklama'];
    $vip3_paketaciklama=$_POST['vip2_paketaciklama'];
    $vip4_paketaciklama=$_POST['vip3_paketaciklama'];
    $vip4_paketaciklama=$_POST['vip4_paketaciklama'];


    $guncelle=$db->exec("UPDATE ayarlar SET market_baslik='$market_baslik' where ayar_id='0'");


    $guncelle=$db->exec("UPDATE ayarlar SET vip1_paketismi='$vip1_paketismi' where ayar_id='0'");
    $guncelle=$db->exec("UPDATE ayarlar SET vip2_paketismi='$vip2_paketismi' where ayar_id='0'");
    $guncelle=$db->exec("UPDATE ayarlar SET vip3_paketismi='$vip3_paketismi' where ayar_id='0'");
    $guncelle=$db->exec("UPDATE ayarlar SET vip4_paketismi='$vip4_paketismi' where ayar_id='0'");
    $guncelle=$db->exec("UPDATE ayarlar SET vip4_paketismi='$vip4_paketismi' where ayar_id='0'");


    $guncelle=$db->exec("UPDATE ayarlar SET vip1_paketaciklama='$vip1_paketaciklama' where ayar_id='0'");
    $guncelle=$db->exec("UPDATE ayarlar SET vip2_paketaciklama='$vip2_paketaciklama' where ayar_id='0'");
    $guncelle=$db->exec("UPDATE ayarlar SET vip3_paketaciklama='$vip3_paketaciklama' where ayar_id='0'");
    $guncelle=$db->exec("UPDATE ayarlar SET vip4_paketaciklama='$vip4_paketaciklama' where ayar_id='0'");
    $guncelle=$db->exec("UPDATE ayarlar SET vip1_paketfiyat='$vip1_paketfiyat' where ayar_id='0'");
    $guncelle=$db->exec("UPDATE ayarlar SET vip2_paketfiyat='$vip2_paketfiyat' where ayar_id='0'");
    $guncelle=$db->exec("UPDATE ayarlar SET vip3_paketfiyat='$vip3_paketfiyat' where ayar_id='0'");
    $guncelle=$db->exec("UPDATE ayarlar SET vip4_paketfiyat='$vip4_paketfiyat' where ayar_id='0'");


    if ($guncelle) {
        header('Location:../adminp/ayarlar.php');
    } else{
        header('Location:../adminp/ayarlar.php');

    }

/*    if ($guncelle) {
        echo "$guncelle kayıt değiştirildi...";

    // code...
    } else {

        echo "$guncelle kayıt değiştirildi, işler yolunda değil patron. NOT: Genellikle Çoklu Düzenlemeyle düzenleme yapınca işler yolunda değil diyorsa takma güncelleniyor, bug sadece(VOLKAN)";

    }*/


}
/*if (isset($_POST['uyegiris'])) {
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
                header('Location:../adminp/login.php?login=no');



        }
    } 
}*/

?>