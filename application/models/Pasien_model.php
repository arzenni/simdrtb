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
        public function getbyId($id){
            return $this->db->query("SELECT pasien.*, alamat.dsn, alamat.kelurahan, alamat.kecamatan, alamat.rt, alamat.rw, alamat.kota FROM pasien, alamat WHERE pasien.noRm = alamat.noRM AND pasien.noRm = ". $id)->row_array();
            // $this->db->where('noRm', $id);
            // $this->db->select('*');
            // $this->db->from('blogs');
            // $this->db->join('comments', 'comments.id = blogs.id');
            // return 
        }

        

        public function tambahpasien(){
            $data=[
                "noRm" => $this->input->post('noRm'),
                "nik" => $this->input->post('nik'),
                "nama" => $this->input->post('nama'),
                "tglahir" => $this->input->post('tglahir'),
                "tglregistrasi" => $this->input->post('tgregis'),
                "jnsK" => $this->input->post('jnsK'),
                "ibu" => $this->input->post('ibu'),
            ];
            
            $this->db->insert('pasien', $data);

            $data=[
                "noRm" => $this->input->post('noRm'),
                "dsn" => $this->input->post('dsn'),
                "rt" => $this->input->post('rt'),
                "rw" => $this->input->post('rw'),
                "kelurahan" => $this->input->post('kelurahan'),
                "kecamatan" => $this->input->post('kecamatan'),
                "kota" => $this->input->post('kota'),
            ];

            $this->db->insert('alamat', $data);

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

