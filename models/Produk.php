<?php
class Produk
{
    private $koneksi;
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function dataProduk()
    {
        $sql = "SELECT produk.*, jenis_produk.nama as kategori from produk inner join 
        jenis_produk on jenis_produk.id = produk.jenis_produk_id";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
