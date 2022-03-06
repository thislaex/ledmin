<?php 
include 'netting/baglan.php';

function giriskontrol () {

	$admin_kadi=$_SESSION['uyegiris'];

		$kullanicisor=prepare("SELECT * from admin where admin_kadi=:ad");
		$kullanicisor->execute(array(
			'ad' => $admin_kadi
		));
		echo $xsay=$kullanicisor->rowCount();
		if ($xsay==0) {
			echo $_SESSION['uyegiris'] = $admin_kadi;    
			header('Location:../adminp/login.php');
		} 
}

?>