<?php

    class Home extends CI_Controller {
        public function index()
        {
            $data['title'] = 'HOME';
            $this->load->view('template/header');
            $this->load->view('home/index');
            $this->load->view('template/footer');
        }
    }
