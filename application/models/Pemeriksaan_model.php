<?php

    class Pemeriksaan_model extends CI_Controller{
      public function getAllpemeriksaan(){
           return $this->db->query("SELECT pemeriksaan.idPeriksa,
           pemeriksaan.noRm,
           pemeriksaan.tglmulai,
           pasien.nama,
           tcm.idreg,
           tcm.hasildetect,
           tcm.hasilresist,
           vct.hasil,
           pemeriksaan.blnpengobatan,
           pemeriksaan.klasifikasi,
           pemeriksaan.thoraks,
           mikroskopis.tglkeluar,
           mikroskopis.nilaikonversi,
           mikroskopis.konversi
         FROM lanjutoat
           INNER JOIN pemeriksaan
             ON lanjutoat.idPeriksa = pemeriksaan.idPeriksa
           INNER JOIN tcm
             ON pemeriksaan.idreg = tcm.idreg
           INNER JOIN mikroskopis
             ON mikroskopis.idPeriksa = pemeriksaan.idPeriksa
           INNER JOIN hasilpengobatan
             ON hasilpengobatan.idPeriksa = pemeriksaan.idPeriksa
           INNER JOIN stokoat
             ON stokoat.idPeriksa = pemeriksaan.idPeriksa
           INNER JOIN terapi
             ON terapi.idPeriksa = pemeriksaan.idPeriksa
           INNER JOIN tescepat
             ON tescepat.idPeriksa = pemeriksaan.idPeriksa
           INNER JOIN vct
             ON vct.idPeriksa = pemeriksaan.idPeriksa
           INNER JOIN pasien
             ON pemeriksaan.noRm = pasien.noRm")->result_array();
      }

      public function detil($id){
         return $this->db->query("SELECT pemeriksaan.idPeriksa,
         pemeriksaan.noRm,
         pemeriksaan.tglmulai,
         pasien.nama,
         tcm.idreg,
         tcm.hasildetect,
         tcm.hasilresist,
         tcm.kethasil,
         tcm.ketklinik,
         pemeriksaan.kettambahan,
         vct.hasil,
         pemeriksaan.blnpengobatan,
         pemeriksaan.klasifikasi,
         pemeriksaan.thoraks,
         mikroskopis.tglkeluar,
         mikroskopis.nilaikonversi,
         mikroskopis.konversi,
         tcm.bahanperiksa,
         tcm.kettambahan as kettcm,
         tcm.rawat,
         tcm.ruang,
         tcm.tglperiksa,
         tcm.wktperiksa,
         pemeriksaan.idreg,
         pemeriksaan.panduanoat,
         pemeriksaan.noat,
         pemeriksaan.riwayat,
         vct.tempat as tmptvct,
         vct.tanggal as tglvct,
         lanjutoat.lanjutoat,
         lanjutoat.ntempat as tempatloat,
         stokoat.stokoat,
         stokoat.ntempat,
         terapi.terapi,
         terapi.dm,
         terapi.pengobatandm,
         tescepat.tempat,
         tescepat.tanggal,
         tescepat.ntcepat,
         tescepat.kultur,
         tescepat.nkultur,
         pasien.noRm,
         pasien.nik,
         hasilpengobatan.hasil,
         hasilpengobatan.tglhenti,
         pemeriksaan.idPeriksa
       FROM lanjutoat
         INNER JOIN pemeriksaan
           ON lanjutoat.idPeriksa = pemeriksaan.idPeriksa
         INNER JOIN tcm
           ON pemeriksaan.idreg = tcm.idreg
         INNER JOIN mikroskopis
           ON mikroskopis.idPeriksa = pemeriksaan.idPeriksa
         INNER JOIN hasilpengobatan
           ON hasilpengobatan.idPeriksa = pemeriksaan.idPeriksa
         INNER JOIN stokoat
           ON stokoat.idPeriksa = pemeriksaan.idPeriksa
         INNER JOIN terapi
           ON terapi.idPeriksa = pemeriksaan.idPeriksa
         INNER JOIN tescepat
           ON tescepat.idPeriksa = pemeriksaan.idPeriksa
         INNER JOIN vct
           ON vct.idPeriksa = pemeriksaan.idPeriksa
         INNER JOIN pasien
           ON pemeriksaan.noRm = pasien.noRm
       GROUP BY pemeriksaan.tglmulai
       HAVING pemeriksaan.idPeriksa = ". $id . " ORDER BY pemeriksaan.idPeriksa")->row_array();
      }
      

      public function autofill($id){
         // $id = $this->input->post('noRm')
         return $this->db->query("SELECT pemeriksaan.noRm, pemeriksaan.tglmulai, pemeriksaan.klasifikasi, pemeriksaan.riwayat, pemeriksaan.panduanoat, pemeriksaan.noat FROM pemeriksaan WHERE pemeriksaan.noRm = ".$id." GROUP BY pemeriksaan.tglmulai ORDER BY pemeriksaan.tglmulai DESC LIMIT 1")->row_array();
      }

      public function autokomplit(){

      }

      
      //============================================================================================
      //C_UD PEMERIKSAAN
      public function tambahpemeriksaan(){
         $data=[
            //"idPeriksa" => $newid,
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
      }
      
      public function updatepemeriksaan(){
         $data = [
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
    
         $this->db->where('idPeriksa', $this->input->post('idPeriksa'));
         $this->db->update('pemeriksaan', $data);
      }

      //C_UD DATA TCM
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
      
      public function updatetcm(){
         $data=[
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
         $this->db->where('idreg', $this->input->post('genxpert'));
         $this->db->update('tcm', $data);
      }
//===========================================================================

      //TAMBAH DATA MIKROSKOPIS
      public function mikroskopis(){
         $data=[
            'idPeriksa' => $id,
            "konversi" => $this->input->post('mikkonv'),
            "nilaikonversi" => $this->input->post('nilaikonv'),
            "tglkeluar" => $this->input->post('miktgl'),
         ];
         $this->db->insert('mikroskopis', $data);
      }
      
      public function updatemikroskopis($id = null){
         $data=[
            "konversi" => $this->input->post('mikkonv'),
            "nilaikonversi" => $this->input->post('nilaikonv'),
            "tglkeluar" => $this->input->post('miktgl'),
         ];
         $this->db->where('idPeriksa', $this->input->post('idPeriksa'));
         $this->db->update('mikroskopis', $data);
      }
//==========================================================================

      //C_UD LANJUTOAT

      public function lanjutoat(){
         $data = [
            "idPeriksa" => $id,
            "lanjutoat" => $this->input->post('lanjutoat'),
            "ntempat" => $this->input->post('ntempatloat'),
         ];
         $this->db->insert('lanjutoat', $data);
      }

      public function updatelanjutoat($id=null){
         $data = [
            "lanjutoat" => $this->input->post('lanjutoat'),
            "ntempat" => $this->input->post('ntempatloat'),
         ];
         $this->db->where('idPeriksa', $this->input->post('idPeriksa'));
         $this->db->update('lanjutoat', $data);
      }

//==============================================================================

      //C_UD HASIL PENGOBATAN
      public function hasilpengobatan(){
         $data = [
            "idPeriksa" => $id,
            "hasil" => $this->input->post('hasilpengobatan'),
            "tglhenti" => $this->input->post('tglhenti'),
         ];
         $this->db->insert('hasilpengobatan', $data);
      }

      public function updatehasilpengobatan($id=null){
         $data = [
            "hasil" => $this->input->post('hasilpengobatan'),
            "tglhenti" => $this->input->post('tglhenti'),
         ];
         $this->db->where('idPeriksa', $this->input->post('idPeriksa'));
         $this->db->update('hasilpengobatan', $data);
      }

//=================================================================================

      //C_UD STOK OAT
      public function stokoat($id=null)
      {
         $data = [
            "idPeriksa" => $id,
            "ntempat" => $this->input->post('ntempatoat'),
            "stokoat" => $this->input->post('stokoat'),
         ];
         $this->db->insert('stokoat', $data);
      }

      public function updatestokoat()
      {
         $data = [
            "ntempat" => $this->input->post('ntempatoat'),
            "stokoat" => $this->input->post('stokoat'),
         ];
         $this->db->where('idPeriksa', $this->input->post('idPeriksa'));
         $this->db->update('stokoat', $data);
      }

//=====================================================================================
      //C_UD TERAPI
      public function terapi($id=null)
      {
         $data = [
            "idPeriksa" => $id,
            "dm" => $this->input->post('dm'),
            "pengobatandm" => $this->input->post('pengobatandm'),
            "terapi" => $this->input->post('art'),
         ];
         $this->db->insert('terapi', $data);
      }

      public function updateterapi()
      {
         $data = [
            "dm" => $this->input->post('dm'),
            "pengobatandm" => $this->input->post('pengobatandm'),
            "terapi" => $this->input->post('art'),
         ];
         $this->db->where('idPeriksa', $this->input->post('idPeriksa'));
         $this->db->update('terapi', $data);
      }

//===========================================================================================================
      //C_UD TES CEPAT
      public function tescepat($id=null)
      {
         $data = [
            "idPeriksa" => $id,
            "kultur" => $this->input->post('kultur'),
            "nkultur" => $this->input->post('nkultur'),
            "ntcepat" => $this->input->post('ntcepat'),
            "tanggal" => $this->input->post('tgltcepat'),
            "tempat" => $this->input->post('tcepat'),
         ];
         $this->db->insert('tescepat', $data);
      }

      public function updatetescepat()
      {
         $data = [
            "kultur" => $this->input->post('kultur'),
            "nkultur" => $this->input->post('nkultur'),
            "ntcepat" => $this->input->post('ntcepat'),
            "tanggal" => $this->input->post('tgltcepat'),
            "tempat" => $this->input->post('tcepat'),
         ];
         $this->db->where('idPeriksa', $this->input->post('idPeriksa'));
         $this->db->update('tescepat', $data);
      }
//===========================================================================================================

      //C_UD TES VCT
      public function vct($id=null)
      {
         $data = [
            "idPeriksa" => $id,
            "hasil" => $this->input->post('hasilvct'),
            "tanggal" => $this->input->post('tglvct'),
            "tempat" => $this->input->post('tempatvct'),
         ];
         $this->db->insert('vct', $data);
      }

      public function updatevct()
      {
         $data = [
            "hasil" => $this->input->post('hasilvct'),
            "tanggal" => $this->input->post('tglvct'),
            "tempat" => $this->input->post('tempatvct'),
         ];
         $this->db->where('idPeriksa', $this->input->post('idPeriksa'));
         $this->db->update('vct', $data);
      }

      //============================================================================================
      public function cekRm($noRm){
         return $this->db->query("SELECT noRm from pasien WHERE noRm = ". $noRm)->row_array();
      }

      public function getIdperiksa(){
         return $this->db->query("SELECT idPeriksa FROM pemeriksaan GROUP by idPeriksa DESC LIMIT 1")->row();
         
     }

     public function cektcm(){
      return $this->db->query("SELECT idreg FROM tcm GROUP by idreg DESC LIMIT 1")->row();
     }
   }


//    SELECT `pasien`.`noRm` AS noRm, `pasien`.`nama` AS `noRm`, `pemeriksaan`.`tgl` AS `noRm`, `mikroskopis`.`hasil` AS `noRm`, `mikroskopis`.`tglkeluar` AS `noRm`, `tcm`.`hasil` AS `noRm`, `tcm`.`waktu` AS `noRm`, `pemeriksaan`.`tglront` AS `noRm`, `diagnosa`.`hasil`
// FROM `pasien`, `pemeriksaan`, `mikroskopis`, `tcm`, `diagnosa`
// WHERE pemeriksaan.noRm = pasien.noRm AND mikroskopis.idMk = pemeriksaan.idMk AND tcm.idreg = pemeriksaan.idreg AND diagnosa.idPeriksa = pemeriksaan.idPeriksa