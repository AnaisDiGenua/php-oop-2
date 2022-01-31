<?php

class UserPremium extends User {
    private $discount;
    private $level;


    //CONSTRUCT
    public function __construct($_name, $_surname, $_email, $_date_of_birthday, $_address,  $_type_of_user, $_level)
    {
        parent::__construct($_name, $_surname, $_email, $_date_of_birthday, $_address,  $_type_of_user);
        $this->level = $_level;
    }


    //SCONTO UTENTI PREMIUM 
    public function setDiscount($_level) {
        if($_level > 3) {
            $this->discount = 30;
        } else {
            $this->discount = 10;
        }
    }
}


?>