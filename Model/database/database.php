<?php

class Database{
    private ?PDO $connection=null;

    public function __construct(){
        try{
            $this->connection =new PDO("mysql:host=localhost;dbname=application_web","root","",
            [PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION]);
           // echo "yess";
        }catch(PDOException $e){
            echo "errer".$e->getMessage();
        }
    }

    public function getPDO(){
       // echo "yesss";
        return $this->connection;
    }
}
