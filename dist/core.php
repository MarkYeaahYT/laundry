<?php

/**
 * Handle some additional backend 
 *  */
class core{

    public $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect("localhost", "mark", "", "laundry") or die("Couldn't Connect");
    }

    /**
     * Core Behavior
     */
    public function login()
    {
        
    }
    /**
     * END Core Behavior
     */

    // ---------------------

    /**
     * Admin Behavior
     */
    
    public function logout()
    {
        echo "logout bruh";
    }

    public function registrasi_pelanggan()
    {
        echo "logout bruh";
    }

    public function crud_outlet()
    {
        if(isset($_GET["action"])){
            if($_GET["action"] == "r"){
                $myarr = array();
                $q = mysqli_query($this->connection, "select o.id, pl.nama, o.berat, pr.nama as produk, pr.id as prdid, o.tgl_masuk, u.username as pegawai, o.status from outlet o join pelanggan pl on o.pelanggan_id = pl.id join produk pr on o.produk_id= pr.id
                join user u on o.user_id = u.id");
                while($row = mysqli_fetch_assoc($q)){
                    $myarr[] = $row;
                }
                echo json_encode($myarr);
            }
        }
        if(isset($_POST["action"])){
            $action = $_POST["action"];
            if($action == "rp"){ // read produk
                $myarr = array();
                $q = mysqli_query($this->connection, "select id, nama from produk");
                while($row = mysqli_fetch_assoc($q)){
                    $myarr[] = $row;
                }
                echo json_encode($myarr);
            }elseif($action == "c"){
                $nama = strip_tags($_POST["nama"]);
                $q = mysqli_query($this->connection, "select id from pelanggan where nama = '$nama'");
                $res = mysqli_fetch_assoc($q);
                $nama = $res["id"];

                $berat = strip_tags($_POST["berat"]);
                $produk = strip_tags($_POST["produk"]);
                $date = strip_tags($_POST["date"]);
                $date = str_replace("-", "", $date);
                $q = mysqli_query($this->connection, "insert into outlet(berat, tgl_masuk, produk_id, user_id, pelanggan_id) values($berat, $date, $produk, 5, $nama)");
                if($q){
                    echo "true";
                }else{
                    echo "false";
                }
            }elseif ($action == "u") {
                $id = strip_tags($_POST["id"]);
                $berat = strip_tags($_POST["berat"]);
                $produk = strip_tags($_POST["produk"]);

                $q = mysqli_query($this->connection, "update outlet set berat = $berat, produk_id = $produk where id = $id");
                if($q){
                    echo "true";
                }else{
                    echo "false";
                }
            }elseif ($action == "d") {
                $id = strip_tags($_POST["id"]);
                $q = mysqli_query($this->connection, "delete from outlet where id = $id");
                if($q){
                    echo "true";
                }else{
                    echo "false";
                }
            }
        }
    }

    public function crud_produk()
    {
        if(isset($_GET["action"])){
            if($_GET["action"] == "r"){
                $myarr = array();
                $q = mysqli_query($this->connection, "select * from produk");
                while($row = mysqli_fetch_assoc($q)){
                    $myarr[] = $row;
                }
                echo json_encode($myarr);
            }
        }
        if(isset($_POST["action"])){
            $action = $_POST["action"];
            if($action == "c"){
                $nama = strip_tags($_POST["nama"]);
                $berat = strip_tags($_POST["berat"]);
                $harga = strip_tags($_POST["harga"]);
                $q = mysqli_query($this->connection, "insert into produk(nama, berat, harga) values('$nama', $berat, $harga)");
                if($q){
                    echo "true";
                }else{
                    echo "false";
                }
            }elseif($action == "u"){
                $nama = strip_tags($_POST["nama"]);
                $berat = strip_tags($_POST["berat"]);
                $harga = strip_tags($_POST["harga"]);
                $id = strip_tags($_POST["id"]);

                $q = mysqli_query($this->connection, "update produk set nama = '$nama', berat = $berat, harga = $harga where id = $id");
                if($q){
                    echo "true";
                }else{
                    echo "false";
                }

            }elseif($action == "d"){
                $id = strip_tags($_POST["id"]);
                $q = mysqli_query($this->connection, "delete from produk where id = $id");
                if($q){
                    echo "true";
                }else{
                    echo "false";
                }
            }
        }
    }
    
    
    public function crud_pengguna()
    {
        if(isset($_GET["action"]) && isset($_GET["u"])){
            if($_GET["action"] == "r" && $_GET["u"] == "pg"){
                $myarr = array();
                $q = mysqli_query($this->connection, "select * from user");
                while($row = mysqli_fetch_assoc($q)){
                    $myarr[] = $row;
                }
                echo json_encode($myarr);
            }elseif($_GET["action"] == "r" && $_GET["u"] == "pl"){
                $myarr = array();
                $q = mysqli_query($this->connection, "select * from pelanggan");
                while($row = mysqli_fetch_assoc($q)){
                    $myarr[] = $row;
                }
                echo json_encode($myarr);

            }
        }
        if(isset($_POST["action"]) && isset($_POST["u"])){
            $action = $_POST["action"];
            $u = $_POST["u"];
            if($action == "c" && $u == "pg"){
                $username = strip_tags($_POST["username"]);
                $password = strip_tags($_POST["password"]);
                $role = strip_tags($_POST["role"]);
                $q = mysqli_query($this->connection, "insert into user(username, password, role) values('$username', '$password', $role)");
                if($q){
                    echo "true";
                }else{
                    echo "false";
                }
            }elseif($action == "u" && $u == "pg"){
                $username = strip_tags($_POST["username"]);
                $password = strip_tags($_POST["password"]);
                $role = strip_tags($_POST["role"]);
                $id = strip_tags($_POST["id"]);
    
                $q = mysqli_query($this->connection, "update user set username = '$username', password = '$password', role = $role where id = $id");
                if($q){
                    echo "true";
                }else{
                    echo "false";
                }
    
            }elseif($action == "d" && $u == "pg"){
                $id = strip_tags($_POST["id"]);
                $q = mysqli_query($this->connection, "delete from user where id = $id");
                if($q){
                    echo "true";
                }else{
                    echo "false";
                }
            }
            // For PL
            elseif($action == "c" && $u == "pl"){
                $nama = strip_tags($_POST["nama"]);
                $username = strip_tags($_POST["username"]);
                $password = strip_tags($_POST["password"]);
                $q = mysqli_query($this->connection, "insert into pelanggan(nama, username, password) values('$nama', '$username', '$password')");
                if($q){
                    echo "true";
                }else{
                    echo "false";
                }
            }elseif ($action == "u" && $u == "pl") {
                $username = strip_tags($_POST["username"]);
                $password = strip_tags($_POST["password"]);
                $nama = strip_tags($_POST["nama"]);
                $id = strip_tags($_POST["id"]);
    
                $q = mysqli_query($this->connection, "update pelanggan set nama = '$nama', username = '$username', password = '$password' where id = $id");
                if($q){
                    echo "true";
                }else{
                    echo "false";
                }
            }elseif ($action == "d" && $u == "pl") {
                $id = strip_tags($_POST["id"]);
                $q = mysqli_query($this->connection, "delete from pelanggan where id = $id");
                if($q){
                    echo "true";
                }else{
                    echo "false";
                }
            }
        }
        
    }

    public function entri_transaksi()
    {
        if(isset($_GET["action"])){
            $action = $_GET["action"];
            $type = $_GET["type"];
            if($action == "r" && $type == "bb"){
                $myarr = array();
                $q = mysqli_query($this->connection, 
                "select o.id, pl.id as pid, pr.id as prid, pl.nama as nama_pelanggan, pr.nama as produk, o.berat, pr.harga ,o.tgl_masuk from outlet o join pelanggan pl on o.pelanggan_id = pl.id join produk pr on o.produk_id = pr.id where o.status = 'process'");
                while($row = mysqli_fetch_assoc($q)){
                    $myarr[] = $row;
                }
                echo json_encode($myarr);
            }elseif($action == "r" && $type == "bs"){
                $myarr = array();
                $q = mysqli_query($this->connection, 
                "");
                while($row = mysqli_fetch_assoc($q)){
                    $myarr[] = $row;
                }
                echo json_encode($myarr);

            }
        }
        if(isset($_POST["action"])){
            $action = $_POST["action"];
            if($action == "c"){
                $total = strip_tags($_POST["total"]);
                $bayar = strip_tags($_POST["bayar"]);
                $oid = strip_tags($_POST["oid"]);
                $pid = strip_tags($_POST["pid"]);
                $prid = strip_tags($_POST["prid"]);
                $date = strip_tags($_POST["date"]);
                $date = str_replace("-", "", $date);
                $q = mysqli_query($this->connection, "insert into transaksi(totalharga, tgl_selesai, bayar, produk_id, outlet_id, pelanggan_id) values($total, $date, $bayar, $prid, $oid, $pid)");
                if($q){
                    echo "true";
                }else{
                    echo "false";
                }
            }
        }
    }

    public function generate_laporan()
    {
        echo "logout bruh";
    }

    /**
     * End Admin Behavior
     */

    // ---------------------


    /**
     * Owner Behavior
     */
    public function o_generate_laporan()
    {
        # code...
    }

    /**
     * End Owner Behavior
     */
    
    // ---------------------
    
    /**
     * Kasir Behavior
     */
    public function k_registrasi()
    {
        # code...
    }
    /**
     * End Kasir Behavior
     */

}
if(isset($_GET["page"])){
    
    $core = new core();
    if ($_GET["page"] == "produk"){
       $core->crud_produk();
    }elseif($_GET["page"] == "pengguna"){
        $core->crud_pengguna();
    }elseif($_GET["page"] == "outlet"){
        $core->crud_outlet();
    }elseif ($_GET["page"] == "transaksi") {
        $core->entri_transaksi();
    }
}

?>