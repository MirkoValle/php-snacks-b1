<?php 

class Membership {
    private $code;

    public function __construct($code) {
        $this->code = $code;
    }


    public function getCode(){
        return $this->code;
    }


    public function setCode($code){
        $this->code = $code;
    }

}