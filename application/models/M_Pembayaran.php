<?php
class M_Pembayaran extends CI_Model {
    function data_pembayaran(){
        $query = $this->db->query("select * from pembayaran");
        return $query;
    }

    function simpan(){
        $data = array('id_pembayaran' => $this->input->post('id_pembayaran'),
                'nisn' => ($this->input->post('nisn')),
                'tgl_bayar' => ($this->input->post('tgl_bayar')),
                'bulan_dibayar' => ($this->input->post('bulan_dibayar')),
                'tahun_dibayar' => ($this->input->post('tahun_dibayar')),
                'id_spp' => ($this->input->post('id_spp')),
                'jumlah_bayar' => $this->input->post('jumlah_bayar'));
        $insert = $this->db->insert('pembayaran',$data);
    }

    function data_pembayaran_by_id($id){
        $query = $this->db->query("select*from pembayaran where id_pembayaran = '$id'");
        return $query;
    }

    function hapus_data_pembayaran($id){
            $query = $this->db->query("delete from pembayaran where id_pembayaran = '$id'");

            if ($query > 0){
                $this->session->set_flashdata('suksessimpan','Data Pembayaran Berhasil Dihapus');
            }else{
                $this->session->set_flashdata('gagalsimpan','Data Pembayaran Gagal Dihapus');
        }
    }

}