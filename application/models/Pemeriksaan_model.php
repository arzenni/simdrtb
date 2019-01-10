<?php

    class Pemeriksaan_model extends CI_Controller{
      public function getAllpemeriksaan(){
           $this->db->select("pemeriksaan.idperiksa, pasien.noRm noRm, pasien.nama nama, pasien.jnsK jnsK, mikroskopis.hasil hasil, mikroskopis.tglkeluar tglkeluar, tcm.idreg idreg, tcm.hasil tcmhasil, pemeriksaan.tglront tglront, pemeriksaan.tgl tgl, GROUP_CONCAT(diagnosa.hasil SEPARATOR ',') as hasil");
           $query = $this->db->get_where('pasien, pemeriksaan, mikroskopis, tcm, diagnosa', 'pasien.noRm = pemeriksaan.noRm  AND mikroskopis.idMk = pemeriksaan.idMk AND tcm.idreg = pemeriksaan.idreg AND diagnosa.idPeriksa = pemeriksaan.idPeriksa');
        // $query = $this->db->query("pemeriksaan.idperiksa IDP, pasien.noRm noRm, pasien.nama nama, pasien.jnsK jnsk, mikroskopis.hasil hasil, mikroskopis.tglkeluar tglkeluar, tcm.idreg idreg, tcm.hasil tcmhasil, pemeriksaan.tglront tglront, pemeriksaan.tgl tgl, GROUP_CONCAT(diagnosa.hasil SEPARATOR ',') as hasil from pasien, pemeriksaan, mikroskopis, tcm, diagnosa WHERE pasien.noRm = pemeriksaan.noRm  AND mikroskopis.idMk = pemeriksaan.idMk AND tcm.idreg = pemeriksaan.idreg AND diagnosa.idPeriksa = pemeriksaan.idPeriksa GROUP BY pemeriksaan.idPeriksa");
           return $query->result_array();
      }

      public function tambahpemeriksaan(){
         $data=[
            "idPeriksa" => $this->input->post('idPeriksa'),
            "idMk" => $this->input->post('idMk'),
            "idreg" => $this->input->post('idreg'),
            "noRm" => $this->input->post('noRm'),
            "tgl" => $this->input->post('tgl'),
            "tglront" => $this->input->post('tglront'),
         ];
         $this->db->insert('pemeriksaan', $data);

         $data=[
         "idPeriksa" => $this->input->post('idPeriksa'),
         "hasil" => $this->input->post('diagnosa'),
         ];
         $this->db->insert('diagnosa', $data);
      }

      public function tambahtcm(){
         $data=[
            "idreg" => $this->input->post('idreg'),
            "waktu" => $this->input->post('tgltcm'),
            "hasil" => $this->input->post('hasiltcm'),
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
   }

   

//    SELECT `pasien`.`noRm` AS noRm, `pasien`.`nama` AS `noRm`, `pemeriksaan`.`tgl` AS `noRm`, `mikroskopis`.`hasil` AS `noRm`, `mikroskopis`.`tglkeluar` AS `noRm`, `tcm`.`hasil` AS `noRm`, `tcm`.`waktu` AS `noRm`, `pemeriksaan`.`tglront` AS `noRm`, `diagnosa`.`hasil`
// FROM `pasien`, `pemeriksaan`, `mikroskopis`, `tcm`, `diagnosa`
// WHERE pemeriksaan.noRm = pasien.noRm AND mikroskopis.idMk = pemeriksaan.idMk AND tcm.idreg = pemeriksaan.idreg AND diagnosa.idPeriksa = pemeriksaan.idPeriksa