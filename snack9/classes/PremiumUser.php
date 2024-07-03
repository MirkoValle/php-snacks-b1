<?php 

require_once __DIR__ . "/Membership.php";

class PremiumUser extends User{
    private $membership;

    public function __construct($name, $username, $email, $membership) {
        parent::__construct($name, $username, $email);
        $this->membership = $membership;
    }


    public function getRewwards(){
        return $this->rewwards;
    }


    public function setRewards($rewards){
        $this->rewards = $rewards;
    }
}