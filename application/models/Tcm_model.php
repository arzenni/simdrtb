<?php

    class Tcm_model extends CI_Model{
        //C_UD DATA TCM

        public function getAlltcm(){
            return $this->db->query("SELECT
            tcm.idreg,
            tcm.bahanperiksa,
            tcm.kethasil,
            tcm.ketklinik,
            tcm.ruang,
            tcm.kettambahan,
            DATE_FORMAT(tcm.tglperiksa, '%e %M %Y') AS tglperiksa,
            tcm.wktperiksa,
            tcm.noRm
          FROM tcm ORDER BY wktpencatatan DESC")->result_array();
        }

        public function detil($id){
            $this->db->where('idreg', $id);
            return $this->db->get('tcm')->row_array();
        }

      public function tambahtcm($genid, $wkt){
        $data=[
           "idreg" => $genid,
           "noRm" => $this->input->post('norm'),
           "bahanperiksa" => $this->input->post('bhnperiksa'),
           "hasildetect" => $this->input->post('detect'),
           "hasilresist" => $this->input->post('resis'),
           "kethasil" => $this->input->post('kethasiltcm'),
           "ketklinik" => $this->input->post('ketklinik'),
           "kettambahan" => $this->input->post('kettambahantcm'),
           "rawat" => $this->input->post('rawat'),
           "ruang" => $this->input->post('ruang'),
           "tglperiksa" => $this->input->post('tcmtgl'),
           "wktperiksa" => $this->input->post('tcmwkt'),
           "wktpencatatan" => $wkt,
           
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

        public function hapustcm($reg){
            // $tcm = $this->input->post('genxpert');
            $this->db->delete('tcm', array('idreg' => $reg));
      }

      public function cektcm($genid){
        return $this->db->query("SELECT idreg FROM tcm WHERE idreg= " . $genid)->row();
       }

       public function getAllruang(){
         return $this->db->query("SELECT * FROM ruang")->result_array();
     }

     public function autofill($id){
      $this->db->select('nama, tglahir');
      $this->db->where('norm', $id);
      return $this->db->get('pasien')->row_array();
   }

}
