<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_toko_tas";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("koneksi error;". mysqli.connect.error());
}
?>
  <?php
    class database{
        var $host = 'localhost';
        var $name = 'root';
        var $pw = '';
        var $db = 'db_toko_tas';
        

        function __construct(){
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
            mysqLi_select_db($koneksi, $this->db);
        }
        // koneksi tas
        function tampiltas(){
            $koneksi = mysqLi_connect($this->host, $this->name, $this->pw, $this->db);
            $data = mysqli_query($koneksi, "SELECT * FROM tas");
            while($d = mysqLi_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
            }   

        // koneksi tambah tas
        function tambahtas($merk_tas, $model, $harga){
            $koneksi = mysqLi_connect($this->host, $this->name, $this->pw, $this->db);
            mysqLi_query($koneksi, "INSERT INTO tas VALUES('', '$merk_tas', '$model', '$harga')");
        }

        // koneksi pelanggan 
        function tampilpelanggan(){
            $koneksi = mysqLi_connect($this->host, $this->name, $this->pw, $this->db);
            $data = mysqli_query($koneksi, "SELECT * FROM pelanggan");
            while($d = mysqLi_fetch_array($data)){
                $hasil[] = $d;
        }
        return $hasil;
        }
        // koneksi tambah pelanggan
        function tambahpelanggan($nama_pelanggan, $alamat, $no_hp){
            $koneksi = mysqLi_connect($this->host, $this->name, $this->pw, $this->db);
            mysqLi_query($koneksi, "INSERT INTO pelanggan VALUES('', '$nama_pelanggan', '$alamat', '$no_hp')");
        }
        // koneksi transaksi 
        function tampiltaransaksi(){
            $koneksi = mysqLi_connect($this->host, $this->name, $this->pw, $this->db);
            $data = mysqli_query($koneksi, "SELECT * FROM transaksi");
            while($d = mysqLi_fetch_array($data)){
                $hasil[] = $d;
        }
        return $hasil;
        }
        // koneksi tambah transaksi
        function tambahtransaksi($id_pelanggan, $id_tas, $kuantitas, $harga, $total_harga){
            $koneksi = mysqLi_connect($this->host, $this->name, $this->pw, $this->db);
            mysqLi_query($koneksi, "INSERT INTO transaksi VALUES('', '$id_pelanggan', '$id_tas', '$kuantitas', '$harga', '$total_harga')");
        }
    }
?>