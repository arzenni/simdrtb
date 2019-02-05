<?php

    class Statistik_model extends CI_Model
    {
        
     public function hitunglanjutoat(){
        return $this->db->query("SELECT
           COUNT(lanjutoat.idPeriksa) AS angkaloat,
           DATE_FORMAT(pemeriksaan.tglmulai, '%m %Y') AS bulanloat
         FROM lanjutoat
           INNER JOIN pemeriksaan
             ON lanjutoat.idPeriksa = pemeriksaan.idPeriksa
           INNER JOIN stokoat
             ON stokoat.idPeriksa = pemeriksaan.idPeriksa
         GROUP BY DATE_FORMAT(pemeriksaan.tglmulai, '%M %Y')
         ORDER BY bulanloat ASC")->result_array();
       }
  
       public function hitungmik(){
           //tampilkan jumlah pemeriksaan berdasarkan bulan tahun
        return $this->db->query("SELECT
           COUNT(mikroskopis.idPeriksa) AS angkamik,
           DATE_FORMAT(mikroskopis.tglkeluar, '%M %Y') AS bulanmik
        FROM mikroskopis
        GROUP BY DATE_FORMAT(mikroskopis.tglkeluar, '%M %Y')
        ORDER BY bulanmik ASC")->result_array();  
       }
//   ===========================================================================================
       public function hitungterapi(){
           //tampilkan jumlah pasien berdasarkan status dm
           // dan diurutkan berdasarkan pemeriksaan berdasarkan bulan tahun
        return $this->db->query("SELECT
            COUNT(terapi.idPeriksa) AS angkaterapi,
            DATE_FORMAT(pemeriksaan.tglmulai, '%M %Y') AS bulanterapi,
            terapi.dm AS hasildm
        FROM terapi
            INNER JOIN pemeriksaan
            ON terapi.idPeriksa = pemeriksaan.idPeriksa
        GROUP BY terapi.dm,
                DATE_FORMAT(pemeriksaan.tglmulai, '%M %Y')
        ORDER BY bulanterapi ASC")->result_array();  
       }
       
        public function hitungvct(){
        return $this->db->query("SELECT
            COUNT(vct.idPeriksa) AS angkavct,
            DATE_FORMAT(vct.tanggal, '%M %Y') AS bulanvct,
            vct.hasil AS hasilvct
        FROM vct
        GROUP BY vct.hasil,
                DATE_FORMAT(vct.tanggal, '%M %Y')
        ORDER BY bulanvct ASC")->result_array();  
       }
  
       public function hitungtcm(){
        return $this->db->query("SELECT
            COUNT(tcm.idreg) AS angkatcm,
            DATE_FORMAT(tcm.tglperiksa, '%M %Y') AS bulantcm,
            tcm.ketklinik AS hasiltcm
        FROM tcm
        GROUP BY tcm.ketklinik,
                DATE_FORMAT(tcm.tglperiksa, '%M %Y')
        ORDER BY bulantcm DESC")->result_array();  
       }
    }
    