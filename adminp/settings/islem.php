<?php
include 'netting/baglan.php';


if (isset($_POST['admin_kadi'])) 

{

    $admin_kadi = $_POST['admin_kadi'];
    $admin_sifre = $_POST['admin_sifre'];

/*if (!$admin_kadi || !$admin_sifre) {
    die("boş alan bırakmayınız!");
}
*/

$uyegiris=$db->query("SELECT * FROM admin", PDO::FETCH_ASSOC);
if ($uyegiris) {
    $_SESSION['uyegiris'] = $uyegiris;
    header("location:../adminp/index.php");
}else {
    echo $_POST['admin_kadi'];
}
}
