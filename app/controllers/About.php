<?php
    class About extends Controller{
        public function index($nama="Tara", $pekerjaan="programmer"){
            $data['nama'] = $nama;
            $data['pekerjaan'] = $pekerjaan;
            $data['judul'] = 'About';

            $this->view('templates/header', $data);
            $this->view('about/index', $data);
            $this->view('templates/footer');
        }
    }