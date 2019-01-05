<?php

    class Pasien_model extends CI_Controller{
       public function getAllpasien(){
           $this->db->select("pasien.* , alamat.kecamatan kecamatan");
           $query = $this->db->get_where('pasien, alamat', 'pasien.noRm = alamat.noRm');
           return $query->result_array();
       }

    //    public function getbyIdpasien($id){
    //         $this->db->select("pasien.* , alamat.*");
    //         $query = $this->db->get_where('pasien, alamat', 'pasien.noRm = '$id . ' and ' . 'alamat.noRm = ' $id);
    //         return $query->result_array();
    //    }
    }

