<?php
    class Mahasiswa_Model{
        private $table = 'mahasiswa';
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getAll(){
            $this->db->query('SELECT * from '.$this->table);
            return $this->db->resultset();
        }

        public function getbyId($id){
            $this->db->query('SELECT * from '.$this->table.' WHERE id=:id');
            $this->db->bind('id',$id);
            return $this->db->single();
        }

        public function cari(){
            $keyword = $_POST['keyword'];
            $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
            $this->db->query($query);
            $this->db->bind('keyword',"%$keyword%");

            return $this->db->resultset();
        }

        public function insert($data){
            $tempquery = "INSERT INTO mahasiswa VALUES (null, :nama, :nim)";
            $this->db->query($tempquery);
            $this->db->bind('nama',$data['nama']);
            $this->db->bind('nim',$data['nim']);

            $this->db->execute();

            return $this->db->rowcount();
        }

        public function delete($id){
            $tempquery = "DELETE FROM mahasiswa WHERE id=:id";
            $this->db->query($tempquery);
            $this->db->bind('id',$id);

            $this->db->execute();

            return $this->db->rowcount();
        }
    } 