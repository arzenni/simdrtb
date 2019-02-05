<?php

    class Pasien_model extends CI_Model{
       public function getAllpasien(){
           $this->db->select("pasien.* , alamat.kecamatan kecamatan");
           $query = $this->db->get_where('pasien, alamat', 'pasien.noRm = alamat.noRm');
           return $query->result_array();
       }

        public function getbyId($id){
            return $this->db->query("SELECT pasien.*, alamat.dsn, alamat.kelurahan, alamat.kecamatan, alamat.rt, alamat.rw, alamat.kota FROM pasien, alamat WHERE pasien.noRm = alamat.noRM AND pasien.noRm = ". $id)->row_array();
        }

        public function tambahpasien($data1,$data2){
            $this->db->insert('pasien', $data1);
            $this->db->insert('alamat', $data2);

        }

        public function hapuspasien($id){
            $this->db->where('id', $id);
            $this->db->delete('pasien');
            $this->db->delete('alamat');
        }

        public function ubahpasien(){
            $data=[
                "nik" => $this->input->post('nik'),
                "nama" => $this->input->post('nama'),
                "tglahir" => $this->input->post('tglahir'),
                "tglregistrasi" => $this->input->post('tglregis'),
                "jnsK" => $this->input->post('jnsK'),
                "ibu" => $this->input->post('ibu'),
            ];
            $this->db->where('noRm', $this->input->post('noRm'));
            $this->db->update('pasien', $data);

            $data=[
                "dsn" => $this->input->post('dsn'),
                "rt" => $this->input->post('rt'),
                "rw" => $this->input->post('rw'),
                "kelurahan" => $this->input->post('kelurahan'),
                "kecamatan" => $this->input->post('kecamatan'),
                "kota" => $this->input->post('kota'),
            ];
            $this->db->where('noRm', $this->input->post('noRm'));
            $this->db->update('alamat', $data);
        }

    }

