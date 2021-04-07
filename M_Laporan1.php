<?php
class M_Laporan extends CI_Model {
    function data_laporan(){
        $query = $this->db->query("select * from siswa");
        return $query;
        $query = $this->db->query("select * from kelas");
        return $query;
        $query = $this->db->query("select * from pembayaran");
        return $query;
    }
}