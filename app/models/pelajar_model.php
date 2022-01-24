<?php

class pelajar_model
{
    private $table = 'pelajar';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllpelajar()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultset();
    }

    public function getpelajarByid($id)
    {
        $this->db->query("SELECT * FROM `pelajar` WHERE id = :id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function tambahDataPelajar($data)
    {
        $query = "INSERT INTO pelajar 
                   VALUES
                  ('' , :nama, :nrp, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowcount();
    }

    public function hapusDataPelajar($id)
    {
        $query = "DELETE FROM pelajar WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahDataPelajar($data)
    {
        $query = "UPDATE pelajar SET
                  nama = :nama, 
                  nrp = :nrp,
                  email= :email,
                  jurusan= :jurusan,  
                  WHERE id = :id";
    
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);
    
        $this->db->execute();
    
        return $this->db->rowcount();
    }
    public function cariDatapelajar()
    {
       $keyword = $_POST['keyword'];
       $query = "SELECT * FROM pelajar WHERE nama LIKE :keyword";
       $this->db->query($query);
       $this->db->bind('keyword', "%$keyword%");
       return $this->db->resultset();
  
    }
}