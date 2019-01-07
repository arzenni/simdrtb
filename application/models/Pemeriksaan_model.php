<?php

    class Pemeriksaan_model extends CI_Controller{
       public function getAllpemeriksaan(){
           $this->db->select("pemeriksaan.idperiksa, pasien.noRm noRm, pasien.nama nama, pasien.jnsK jnsK, mikroskopis.hasil hasil, mikroskopis.tglkeluar tglkeluar, tcm.idreg idreg, tcm.hasil tcmhasil, pemeriksaan.tglront tglront, pemeriksaan.tgl tgl, GROUP_CONCAT(diagnosa.hasil SEPARATOR ',') as hasil");
           $query = $this->db->get_where('pasien, pemeriksaan, mikroskopis, tcm, diagnosa', 'pasien.noRm = pemeriksaan.noRm  AND mikroskopis.idMk = pemeriksaan.idMk AND tcm.idreg = pemeriksaan.idreg AND diagnosa.idPeriksa = pemeriksaan.idPeriksa');
        // $query = $this->db->query("pemeriksaan.idperiksa IDP, pasien.noRm noRm, pasien.nama nama, pasien.jnsK jnsk, mikroskopis.hasil hasil, mikroskopis.tglkeluar tglkeluar, tcm.idreg idreg, tcm.hasil tcmhasil, pemeriksaan.tglront tglront, pemeriksaan.tgl tgl, GROUP_CONCAT(diagnosa.hasil SEPARATOR ',') as hasil from pasien, pemeriksaan, mikroskopis, tcm, diagnosa WHERE pasien.noRm = pemeriksaan.noRm  AND mikroskopis.idMk = pemeriksaan.idMk AND tcm.idreg = pemeriksaan.idreg AND diagnosa.idPeriksa = pemeriksaan.idPeriksa GROUP BY pemeriksaan.idPeriksa");
           return $query->result_array();
       }

       public function tambahdiagnosa(){

       }

       public function tambahtcm(){

       }

       
    }