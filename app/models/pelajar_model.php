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
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
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
}
