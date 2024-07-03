<?php 

class User {
    protected $name;
    protected $lastname; 
    protected $username; 
    protected $email;
    
    public function __construct($name, $username, $email) {
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
    }

    
    public function getName(){
        return $this->name;
    }


    public function getUserName(){
        return $this->username;
    }


    public function getEmail(){
        return $this->email;
    }


    public function setName($name){
        $this->name = $name;
    }


    public function setUsername($username){
        $this->username = $username;
    }


    public function setEmail($email){
        $this->email = $email;
    }

}