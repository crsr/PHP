<?php
class Database{
 private $host = DBH;
 private $user = DBU;
 private $pass = DBP;
 private $dbname = DBN;
 
 private $db;
 private $error;
 
    public function __construct(){
        // Set dsn
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        // Set options
        $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );
        // Create a new PDO instanace
        try{
            $this->db = new PDO($dsn, $this->user, $this->pass, $options);
        }
        // Catch any errors
        catch(PDOException $e){
            $this->error = $e->getMessage();
        }
    }
}
?>
