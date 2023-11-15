<?php

class Admin_model{
    private $db;
    private $tabel = 'manageadmin';

    public function __construct(){
        $this->db = new Database;
    }
    public function addAdmin($data){
        $query = "INSERT INTO ".$this->tabel." VALUES (NULL,:nama,:jabatan)";

        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('jabatan',$data['jabatan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function deleteAdmin($id_manageadmin){
        $query = "DELETE FROM " .$this->tabel. " WHERE id_manageadmin=:id_manageadmin";
        $this->db->query($query);
        $this->db->bind('id_manageadmin',$id_manageadmin);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function editAdmin($data){
        $query = "UPDATE ".$this->tabel. " SET nama =:nama, jabatan =:jabatan WHERE id_manageadmin =:id_manageadmin";

        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('jabatan',$data['jabatan']);
        $this->db->bind('id_manageadmin',$data['id_manageadmin']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getAllAdmin(){
        $query = "SELECT * FROM ".$this->tabel."";
        $this->db->query($query);
        return $this->db->getAll();
    }
    public function getIdAdmin($id){
        $query = "SELECT * FROM " .$this->tabel. " WHERE id_manageadmin = :id_managadmin";
        $this->db->query($query);
        $this->db->bind('id_manageadmin',$id);
        return $this->db->getSingle();
    }


    public function ambilDataJs($id_manageadmin){
        $query = "SELECT * FROM ".$this->tabel." WHERE id_manageadmin = :id_manageadmin";
        $this->db->query($query);
        $this->db->bind('id_manageadmin',$id_manageadmin);
        return $this->db->getSingle();
    }

}