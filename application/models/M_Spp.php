<?php
class M_Spp extends CI_Model {
    function data_spp(){
        $query = $this->db->query("select * from spp");
        return $query;
    }

    function simpan(){
        $data = array('id_spp' => $this->input->post('id_spp'),
                'tahun' => ($this->input->post('tahun')),
                'nominal' => $this->input->post('nominal'));
        $insert = $this->db->insert('spp',$data);
    }

    function data_spp_by_id($id){
        $query = $this->db->query("select*from spp where id_spp = '$id'");
        return $query;
    }
    
    function hapus_data_spp($id){
        $query = $this->db->query("delete from spp where id_spp = '$id'");
        if($query > 0){
            $this->session->set_flashdata('suksessimpan','Data SPP Berhasil Dihapus');
        }else{
            $this->session->set_flashdata('gagalsimpan','Data SPP Gagal Dihapus');
        }
    }
}