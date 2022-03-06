<?php 

include 'header.php';

include 'sidebar.php';


?>


<!-- 	INDEX HEART		-->

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">lédmin Genel Ayarlar</h1>
                <h1 class="page-subhead-line">Genel Paketler </h1>          
            </div>
        </div>

        <form action="islem.php" method="POST">

            <div class="col-md-12">
                <div class="form-group col-md-2">
                    <label>Market Başlığı</label>
                    <input class="form-control" type="text" name="market_baslik" value="<?php echo $ayaryaz['market_baslik']; ?>">
                </div>                    
            </div>

            <br>
            <br>
            <br>
            
            <div class="col-md-12">
                <div class="form-group col-md-2">
                    <label>VIP 1 Paket İsmi</label>
                    <input class="form-control" type="text" name="vip1_paketismi" value="<?php echo $ayaryaz['vip1_paketismi']; ?>">
                </div>

                <div class="form-group col-md-2">    
                    <label>VIP 2 Paket İsmi</label>
                    <input class="form-control" type="text" name="vip2_paketismi" value="<?php echo $ayaryaz['vip2_paketismi']; ?>">
                </div>

                <div class="form-group col-md-2">
                    <label>VIP 3 Paket İsmi</label>
                    <input class="form-control" type="text" name="vip3_paketismi" value="<?php echo $ayaryaz['vip3_paketismi']; ?>">
                </div>
                <div class="form-group col-md-2">    
                    <label>VIP 4 Paket İsmi</label>
                    <input class="form-control" type="text" name="vip4_paketismi" value="<?php echo $ayaryaz['vip4_paketismi']; ?>">
                </div>
            </div>
            <div class="col-md-12">        
              <div class="form-group col-md-5">
                <label>VIP 1 Açıklama</label>
                <textarea style="height: 150px" class="form-control" rows="3" name="vip1_paketaciklama"><?php echo $ayaryaz['vip1_paketaciklama']; ?></textarea>
            </div>
            <div class="form-group col-md-5">
                <label>VIP 2 Açıklama</label>
                <textarea style="height: 150px" class="form-control" rows="3" name="vip2_paketaciklama"><?php echo $ayaryaz['vip2_paketaciklama']; ?></textarea>
            </div>
            <div class="form-group col-md-5">
                <label>VIP 3 Açıklama</label>
                <textarea style="height: 150px" class="form-control" rows="3" name="vip3_paketaciklama"><?php echo $ayaryaz['vip3_paketaciklama']; ?></textarea>
            </div>
            <div class="form-group col-md-5">
                <label>VIP 4 Açıklama</label>
                <textarea style="height: 150px" class="form-control" rows="3" name="vip4_paketaciklama"><?php echo $ayaryaz['vip4_paketaciklama']; ?></textarea>
            </div>                                    
        </div>

        <div class="col-md-12">
            <div class="form-group col-md-2">
                <label>VIP 1 Paket Fiyat</label>
                <input class="form-control" type="number" name="vip1_paketfiyat" value="<?php echo $ayaryaz['vip1_paketfiyat']; ?>">
            </div>
            <div class="form-group col-md-2">
                <label>VIP 2 Paket Fiyat</label>
                <input class="form-control" type="number" name="vip2_paketfiyat" value="<?php echo $ayaryaz['vip2_paketfiyat']; ?>">
            </div>
            <div class="form-group col-md-2">
                <label>VIP 3 Paket Fiyat</label>
                <input class="form-control" type="number" name="vip3_paketfiyat" value="<?php echo $ayaryaz['vip3_paketfiyat']; ?>">
            </div>
            <div class="form-group col-md-2">
                <label>VIP 4 Paket Fiyat</label>
                <input class="form-control" type="number" name="vip4_paketfiyat" value="<?php echo $ayaryaz['vip4_paketfiyat']; ?>">
            </div>                                    
        </div>   

        <div class="col-md-12">
            <div class="form-group col-md-5">
                <input style="width:100%" class="btn btn-success" type="submit" name="ayargonder" value="Ayarları Kaydet">
            </div>                                  
        </div>            

    </form>

</div>
</div>



<?php include 'footer.php'; ?>

