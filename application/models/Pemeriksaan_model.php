<?php

    class Pemeriksaan_model extends CI_Controller{
      public function getAllpemeriksaan(){
           $this->db->select("pemeriksaan.idperiksa, pasien.noRm noRm, pasien.nama nama, pasien.jnsK jnsK, mikroskopis.hasil hasil, mikroskopis.tglkeluar tglkeluar, tcm.idreg idreg, tcm.hasil tcmhasil, pemeriksaan.tglront tglront, pemeriksaan.tgl tgl, GROUP_CONCAT(diagnosa.hasil SEPARATOR ',') as hasil");
           $query = $this->db->get_where('pasien, pemeriksaan, mikroskopis, tcm, diagnosa', 'pasien.noRm = pemeriksaan.noRm  AND mikroskopis.idMk = pemeriksaan.idMk AND tcm.idreg = pemeriksaan.idreg AND diagnosa.idPeriksa = pemeriksaan.idPeriksa');
        // $query = $this->db->query("pemeriksaan.idperiksa IDP, pasien.noRm noRm, pasien.nama nama, pasien.jnsK jnsk, mikroskopis.hasil hasil, mikroskopis.tglkeluar tglkeluar, tcm.idreg idreg, tcm.hasil tcmhasil, pemeriksaan.tglront tglront, pemeriksaan.tgl tgl, GROUP_CONCAT(diagnosa.hasil SEPARATOR ',') as hasil from pasien, pemeriksaan, mikroskopis, tcm, diagnosa WHERE pasien.noRm = pemeriksaan.noRm  AND mikroskopis.idMk = pemeriksaan.idMk AND tcm.idreg = pemeriksaan.idreg AND diagnosa.idPeriksa = pemeriksaan.idPeriksa GROUP BY pemeriksaan.idPeriksa");
           return $query->result_array();
      }

      public function tambahpemeriksaan($idPeriksa){
         $data=[
            "idPeriksa" => $idPeriksa,
            "noRm" => $this->input->post('noRm'),
            "blnpengobatan" => $this->input->post('blnpengobatan'),
            "idreg" => $this->input->post('genxpert'),
            "kettambahan" => $this->input->post('kettambahan'),
            "tglmulai" => $this->input->post('tglmulai'),
            "klasifikasi" => $this->input->post('klasifikasi'),
            "thoraks" => $this->input->post('thoraks'),
            "noat" => $this->input->post('noat'),
            "panduanoat" => $this->input->post('panduanoat'),
            "riwayat" => $this->input->post('riwayat'),
         ];
         $this->db->insert('pemeriksaan', $data);

         // $data=[
         // "idPeriksa" => $this->input->post('idPeriksa'),
         // "hasil" => $this->input->post('diagnosa'),
         // ];
         // $this->db->insert('diagnosa', $data);
      }

      public function tambahtcm(){
         $data=[
            "idreg" => $this->input->post('genxpert'),
            "bahanperiksa" => $this->input->post('bhperiksa'),
            "hasildetect" => $this->input->post('detect'),
            "hasilresist" => $this->input->post('resis'),
            "kethasil" => $this->input->post('kethasiltcm'),
            "ketklinik" => $this->input->post('ketklinik'),
            "kettambahan" => $this->input->post('kettambahantcm'),
            "rawat" => $this->input->post('rawat'),
            "ruang" => $this->input->post('ruang'),
            "tglperiksa" => $this->input->post('tcmtgl'),
            "wktperiksa" => $this->input->post('tcmwkt'),
         ];
         $this->db->insert('tcm', $data);
      }

      public function mikroskopis(){
         $data=[
            "idMk" => $this->input->post('idMk'),
            "hasil" => $this->input->post('hasilMk'),
            "tglkeluar" => $this->input->post('tglMk'),
         ];
         $this->db->insert('mikroskopis', $data);
      }

      public function cekRm($noRm){
         return $this->db->query("SELECT noRm from pasien WHERE noRm = ". $noRm)->row_array();
      }

      public function getIdperiksa(){
         return $this->db->query("SELECT idPeriksa FROM pemeriksaan GROUP by idPeriksa DESC LIMIT 1")->row();
         
     }
   }

   

//    SELECT `pasien`.`noRm` AS noRm, `pasien`.`nama` AS `noRm`, `pemeriksaan`.`tgl` AS `noRm`, `mikroskopis`.`hasil` AS `noRm`, `mikroskopis`.`tglkeluar` AS `noRm`, `tcm`.`hasil` AS `noRm`, `tcm`.`waktu` AS `noRm`, `pemeriksaan`.`tglront` AS `noRm`, `diagnosa`.`hasil`
// FROM `pasien`, `pemeriksaan`, `mikroskopis`, `tcm`, `diagnosa`
// WHERE pemeriksaan.noRm = pasien.noRm AND mikroskopis.idMk = pemeriksaan.idMk AND tcm.idreg = pemeriksaan.idreg AND diagnosa.idPeriksa = pemeriksaan.idPeriksa