<?php

    class Ruang_model extends CI_Model{
        public function getAllruang(){
            return $this->db->query("SELECT * FROM ruang")->result_array();
        }
        
        public function hapusruang($id){
             $this->db->where('id', $id);
            $this->db->delete('ruang');

        }


        public function tambahruang($data){
            $this->db->insert('ruang', $data);
        }
    }