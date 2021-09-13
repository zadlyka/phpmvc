<?php
    class Mahasiswa extends Controller
    {
        public function index(){
            $data['judul'] = 'Daftar Mahasiswa';
            $data['mahasiswa'] = $this->model('Mahasiswa_Model')->getAll();

            $this->view('templates/header', $data);
            $this->view('mahasiswa/index', $data);
            $this->view('templates/footer');
        }

        public function cari(){
            $data['judul'] = 'Daftar Mahasiswa';
            $data['mahasiswa'] = $this->model('Mahasiswa_Model')->cari();

            $this->view('templates/header', $data);
            $this->view('mahasiswa/index', $data);
            $this->view('templates/footer');
        }

        public function getmahasiswa($id){
            $data['judul'] = 'Detail Mahasiswa';
            $data['mahasiswa'] = $this->model('Mahasiswa_Model')->getbyId($id);

            $this->view('templates/header', $data);
            $this->view('mahasiswa/detail', $data);
            $this->view('templates/footer');
        }

        public function insert(){
            if($this->model('Mahasiswa_Model')->insert($_POST) > 0){
                Flasher::setflash('berhasil', 'ditambahkan', 'success');
                header('location:'.BASEURL.'mahasiswa');
                exit;
            }else{
                Flasher::setflash('gagal', 'ditambahkan', 'danger');
                header('location:'.BASEURL.'mahasiswa');
                exit;
            }
        }

        public function delete($id){
            if($this->model('Mahasiswa_Model')->delete($id) > 0){
                Flasher::setflash('berhasil', 'dihapus', 'success');
                header('location:'.BASEURL.'mahasiswa');
                exit;
            }else{
                Flasher::setflash('gagal', 'dihapus', 'danger');
                header('location:'.BASEURL.'mahasiswa');
                exit;
            }
        }
    } 
    