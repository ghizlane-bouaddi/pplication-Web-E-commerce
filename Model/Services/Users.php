<?php

class Users{
    private int $id;
    private string $name;
    private string $email;
    private string $password;

    private int $role_id;

    //private int $role_id;visibilite

    private PDO $connection;

    public function __construct(){
     $db = new Database();
     $this->connection=$db->getPDO();
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

    }

  
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

       
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

    }

    public function getRole()
    {
        return $this->role_id;
    }

    public function setRole($role_id)
    {
        $this->role_id=$role_id;

    }

    
    public function create($name,$email,$password,$role_id){
        $quiry ="INSERT INTO users (name,email,password,role_id) VALUES (?,?,?,?)";
        $stmt =$this->connection->prepare($quiry);
        $stmt->execute([$name,$email,$password,$role_id]);
    }

    public function findByEmail($email,$password){
        $quiry ="SELECT * FROM users WHERE email =? AND password =?";
        $stmt =$this->connection->prepare($quiry);
        $stmt->setFetchMode(PDO::FETCH_CLASS , Users::class);
        $stmt->execute([$email,$password]);
        $result =$stmt->fetch();
        return $result;
    }

}