<?php
    class Home extends Controller
    {
        public function index(){
            $data['judul'] = 'Home';
            $data['nama'] = 'Tara';

            $this->view('templates/header', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer');
        }
    }
    