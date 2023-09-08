<?php
class Jurusan_model
{
   private $table = 'jurusan';
   private $db;

   public function __construct()
   {
    $this->db = new Database;
   }
   public function getAllBlog()
   {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultAll();
   }
   public function getBlogById($id)
   {
    $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->resultSingle();

   }
  public function tambahData()
  {
   $query = " INSERT INTO jurusan (nama) VALUES (:nama) ";
   $this->db->query($query);
   $this->db->bind('nama', $_POST['nama']);
   $this->db->execute();
   return $this->db->rowCount();

  }
  public function hapusDataJurusan($id)
  {
   $query = "DELETE FROM jurusan WHERE id = :id";
   $this->db->query($query);
   $this->db->bind('id', $id);

   $this->db->execute();
   
   return $this->db->rowCount();
  }
  public function ubahDataJurusan($data)
  {

$query = "UPDATE jurusan SET
nama = :nama,
WHERE id = :id";

$this->db->query($query);
$this->db->bind('nama', $data['nama']);
$this->db->bind('id', $data['id']);
$this->db->execute();
return $this->db->rowCount();
} 
}
?>