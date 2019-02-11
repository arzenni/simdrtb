<?php

    class Pemeriksaan_model extends CI_Model{
      public function getAllpemeriksaan(){
           return $this->db->query("SELECT pasien.noRm, pasien.nama, DATE_FORMAT(pasien.tglahir, '%e %M %Y') AS tglahir, pemeriksaan.idPeriksa, pemeriksaan.idreg, DATE_FORMAT(pemeriksaan.tglmulai, '%W, %e %M %Y') AS tglmulai, pemeriksaan.blnpengobatan, DATE_FORMAT(pemeriksaan.wktpencatatan, '%W, %e %M %Y %T') AS wktpencatatan FROM pemeriksaan INNER JOIN pasien ON pemeriksaan.noRm = pasien.noRm ORDER BY pemeriksaan.wktpencatatan DESC")->result_array();
      }

      public function getAllruang(){
         return $this->db->query("SELECT * FROM ruang")->result_array();
     }

      public function hapus($id){
         //$id = $this->input->('noRm');
         $tables = ['mikroskopis', 'vct', 'lanjutoat', 'stokoat', 'terapi', 'hasilpengobatan', 'minitcm', 'pemeriksaan'];
         $this->db->where('idPeriksa', $id);
         $this->db->delete($tables);
      }
      
      public function detil($id){
         return $this->db->query("SELECT
         pemeriksaan.idPeriksa,
         pemeriksaan.noRm,
         pemeriksaan.idreg,
         pemeriksaan.thoraks,
         pemeriksaan.tglmulai,
         pemeriksaan.panduanoat,
         pemeriksaan.noat,
         pemeriksaan.klasifikasi,
         pemeriksaan.riwayat,
         pemeriksaan.blnpengobatan,
         pemeriksaan.kettambahan,
         pasien.nik,
         pasien.noRm,
         pasien.nama,
         hasilpengobatan.hasil AS hasil,
         hasilpengobatan.tglhenti,
         kultur.kultur,
         lanjutoat.lanjutoat,
         lanjutoat.ntempat AS tempatloat,
         mikroskopis.tglkeluar,
         mikroskopis.konversi,
         mikroskopis.nilaikonversi,
         stokoat.stokoat,
         stokoat.ntempat,
         terapi.terapi,
         terapi.dm,
         terapi.pengobatandm,
         vct.tempat AS tmptvct,
         vct.tanggal AS tglvct,
         vct.hasil AS hasilvct,

         minitcm.tglmtcm,
         minitcm.mhasildetect,
         minitcm.mhasilresist
       FROM pemeriksaan
         LEFT OUTER JOIN pasien
           ON pemeriksaan.noRm = pasien.noRm
         LEFT OUTER JOIN hasilpengobatan
           ON hasilpengobatan.idPeriksa = pemeriksaan.idPeriksa
         LEFT OUTER JOIN kultur
           ON kultur.idperiksa = pemeriksaan.idPeriksa
         LEFT OUTER JOIN lanjutoat
           ON lanjutoat.idPeriksa = pemeriksaan.idPeriksa
         LEFT OUTER JOIN mikroskopis
           ON mikroskopis.idPeriksa = pemeriksaan.idPeriksa
         LEFT OUTER JOIN stokoat
           ON stokoat.idPeriksa = pemeriksaan.idPeriksa
         LEFT OUTER JOIN terapi
           ON terapi.idPeriksa = pemeriksaan.idPeriksa
         LEFT OUTER JOIN vct
           ON vct.idPeriksa = pemeriksaan.idPeriksa
         LEFT OUTER JOIN minitcm
           ON minitcm.idPeriksa = pemeriksaan.idPeriksa
       HAVING pemeriksaan.idPeriksa = ".$id)->row_array();
      }
      

      public function autofill($id){
         // $id = $this->input->post('noRm')
         return $this->db->query("SELECT
         terapi.pengobatandm,
         stokoat.stokoat,
         stokoat.ntempat,
         lanjutoat.lanjutoat,
         lanjutoat.ntempat as tempatloat,
         vct.tempat as tmptvct,
         vct.tanggal as tglvct,
         vct.hasil as hasilvct,
         terapi.dm,
         terapi.terapi,
         pemeriksaan.riwayat,
         pemeriksaan.klasifikasi,
         pemeriksaan.noat,
         pemeriksaan.panduanoat,
         pemeriksaan.tglmulai,
         pemeriksaan.noRm,
         pasien.nama,
         DATE_FORMAT(pasien.tglahir, '%e %M %Y') as tglahir
       FROM pemeriksaan
         INNER JOIN pasien
           ON pemeriksaan.noRm = pasien.noRm
         INNER JOIN lanjutoat
           ON lanjutoat.idPeriksa = pemeriksaan.idPeriksa
         INNER JOIN stokoat
           ON stokoat.idPeriksa = pemeriksaan.idPeriksa
         INNER JOIN terapi
           ON terapi.idPeriksa = pemeriksaan.idPeriksa
         INNER JOIN vct
           ON vct.idPeriksa = pemeriksaan.idPeriksa
       GROUP BY pemeriksaan.tglmulai
       HAVING pemeriksaan.noRm = ". $id ."
       ORDER BY pemeriksaan.tglmulai DESC LIMIT 1")->row_array();
      }

      public function autokomplit($norm){
         $this->db->like('noRM', $norm , 'both');
         $this->db->order_by('noRm', 'ASC');
         return $this->db->limit(10)->result();;
         
      }

      
      //============================================================================================
      //C_UD PEMERIKSAAN
      public function tambahpemeriksaan($wkt,$idperiksa){
         $data=[
            //"idPeriksa" => $newid,
            "noRm" => $idperiksa,
            "blnpengobatan" => $this->input->post('blnpengobatan'),
            "idreg" => $this->input->post('genxpert'),
            "kettambahan" => trim(ucwords($this->input->post('kettambahan'))),
            "tglmulai" => $this->input->post('tglmulai'),
            "klasifikasi" => $this->input->post('klasifikasi'),
            "thoraks" => $this->input->post('thoraks'),
            "noat" => $this->input->post('noat'),
            "panduanoat" => $this->input->post('panduanoat'),
            "riwayat" => $this->input->post('riwayat'),
            "wktpencatatan" => $wkt,
         ];
         $this->db->insert('pemeriksaan', $data);
      }
      
      public function updatepemeriksaan(){
         $data = [
               //"noRm" => $this->input->post('noRm'),
               "blnpengobatan" => $this->input->post('blnpengobatan'),
               "idreg" => $this->input->post('genxpert'),
               "kettambahan" => trim(ucwords($this->input->post('kettambahan'))),
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

      
//===========================================================================

      //C_UD MIKROSKOPIS
      public function mikroskopis($id){
         $data=[
            'idPeriksa' => $id,
            "konversi" => $this->input->post('mikkonv'),
            "nilaikonversi" => $this->input->post('nilaikonv'),
            "tglkeluar" => $this->input->post('miktgl'),
         ];
         $this->db->insert('mikroskopis', $data);
      }
      
      public function updatemikroskopis(){
         $data=[
            "konversi" => $this->input->post('mikkonv'),
            "nilaikonversi" => $this->input->post('nilaikonv'),
            "tglkeluar" => $this->input->post('miktgl'),
         ];
         $this->db->where('idPeriksa', $this->input->post('idPeriksa'));
         $this->db->update('mikroskopis', $data);
      }
//==========================================================================
// MINITCM  

      public function idminitcm(){
         $this->db->select('idPeriksa');
         return $this->db->get('minitcm')->row_array();
      }
      
      public function minitcm($id){
         $data = [
            "idPeriksa" => $id,
            "tglmtcm" => $this->input->post('tcmtgl'),
            "mhasildetect" => $this->input->post('detect'),
            "mhasilresist" => $this->input->post('resis'), 
         ];
         $this->db->insert('minitcm', $data);
      }

      public function updateminitcm(){
         $data=[
            "tglmtcm" => $this->input->post('tcmtgl'),
            "mhasildetect" => $this->input->post('detect'),
            "mhasilresist" => $this->input->post('resis'),
         ];
         $this->db->where('idPeriksa', $this->input->post('idPeriksa'));
         $this->db->update('minitcm', $data);
      }

//==========================================================================
      //C_UD LANJUTOAT

      public function lanjutoat($id){
         $data = [
            "idPeriksa" => $id,
            "lanjutoat" => $this->input->post('lanjutoat'),
            "ntempat" => trim(ucwords($this->input->post('ntempatloat'))),
         ];
         $this->db->insert('lanjutoat', $data);
      }

      public function updatelanjutoat(){
         $data = [
            "lanjutoat" => $this->input->post('lanjutoat'),
            "ntempat" => trim(ucwords($this->input->post('ntempatloat'))),
         ];
         $this->db->where('idPeriksa', $this->input->post('idPeriksa'));
         $this->db->update('lanjutoat', $data);
      }

//==============================================================================

      //C_UD HASIL PENGOBATAN
      public function hasilpengobatan($id){
         $data = [
            "idPeriksa" => $id,
            "hasil" => $this->input->post('hasilpengobatan'),
            "tglhenti" => $this->input->post('tglhenti'),
         ];
         $this->db->insert('hasilpengobatan', $data);
      }

      public function updatehasilpengobatan(){
         $data = [
            "hasil" => $this->input->post('hasilpengobatan'),
            "tglhenti" => $this->input->post('tglhenti'),
         ];
         $this->db->where('idPeriksa', $this->input->post('idPeriksa'));
         $this->db->update('hasilpengobatan', $data);
      }

//=================================================================================

      //C_UD STOK OAT
      public function stokoat($id)
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
      public function terapi($id)
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
//===========================================================================================================

      //C_UD TES VCT
      public function vct($id)
      {
         $data = [
            "idPeriksa" => $id,
            "hasil" => trim(ucwords($this->input->post('hasilvct'))),
            "tanggal" => $this->input->post('tglvct'),
            "tempat" => $this->input->post('tempatvct'),
         ];
         $this->db->insert('vct', $data);
      }

      public function updatevct()
      {
         $data = [
            "hasil" => trim(ucwords($this->input->post('hasilvct'))),
            "tanggal" => $this->input->post('tglvct'),
            "tempat" => $this->input->post('tempatvct'),
         ];
         $this->db->where('idPeriksa', $this->input->post('idPeriksa'));
         $this->db->update('vct', $data);
      }

      //============================================================================================

//===========================================================================================================

      //C_UD TES KULTUR
      public function kultur($id)
      {
         $data = [
            "idPeriksa" => $id,
            "kultur" => trim(ucwords($this->input->post('kultur'))),
         ];
         $this->db->insert('kultur', $data);
      }

      public function updatekultur()
      {
         $data = [
            "kultur" => trim(ucwords($this->input->post('kultur'))),
         ];
         $this->db->where('idPeriksa', $this->input->post('idPeriksa'));
         $this->db->update('kultur', $data);
      }

      //============================================================================================
      public function cekRm($noRm){
         return $this->db->query("SELECT noRm from pasien WHERE noRm = ". $noRm)->row_array();
      }

      public function getIdperiksa(){
         return $this->db->query("SELECT idPeriksa FROM pemeriksaan GROUP by idPeriksa DESC LIMIT 1")->row();
         
     }

    

     //=========================================================================Statistik============================================================

     public function getPasien($norm){
      // return $this->db->get_where('pasien', array('noRM' => $norm)->row_array());
      return $this->db->query("SELECT
         pasien.nama,
         pasien.noRm,
         pasien.tglahir
      FROM pasien
      WHERE pasien.noRm = ".$norm)->row_array();
      }


   }