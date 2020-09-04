<?php
if(isset($_GET["page"])){

    if($_GET["page"] == "outlet"){
        include "outlet_admin.php";
    }else if($_GET["page"] == "pengguna"){
        include "pengguna_admin.php";
        
    }else if ($_GET["page"] == "produk") {
        include "produk_admin.php";
        
    }else if($_GET["page"] == "transaksi"){
        include "transaksi_admin.php";
        
    }else if ($_GET["page"] == "laporan") {
        include "laporan_admin.php";
        
    }
}else{
    include "index_admin.php";
}
// Front end


?>