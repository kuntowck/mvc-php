<?php

class Mahasiswa_model
{
   // database handler dan statement
   private $dbh, $stmt;

   public function __construct()
   {
      // data source name
      $dsn = 'mysql:host=localhost;dbname=tutorialphp';

      try {
         $this->dbh = new PDO($dsn, 'root', '');
      } catch (PDOException $e) {
         die($e->getMessage());
      }
   }

   public function getAllMahasiswa() {
      $this->stmt = $this->dbh->prepare('SELECT * FROM Mahasiswa');
      $this->stmt->execute();
      return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
   }
}
