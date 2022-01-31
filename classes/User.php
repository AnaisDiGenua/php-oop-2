<?php

class User {
    protected $name;
    protected $surname;
    protected $email;
    protected $date_of_birthday;
    protected $address;
    protected $creditCards;
    protected $type_of_user;


    //CONSTRUCT
    public function __construct($_name, $_surname, $_email, $_date_of_birthday, $_address, $_creditCards, $_type_of_user)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->date_of_birthday = $_date_of_birthday;
        $this->address = $_address;
        $this->creditCards = $_creditCards;
        $this->type_of_user = $_type_of_user;
    }


    public function getName() 
    {
        return $this->name;
    }

    public function getSurname() 
    {
        return $this->surname;
    }

    public function getEmail() 
    {
        return $this->email;
    }

    public function getDateOfBirthday() 
    {
        return $this->date_of_birthday;
    }

    public function getAddress() 
    {
        return $this->address;
    }

    public function getCreditCards() 
    {
        return $this->creditCards;
    }

    public function getTypeOfUser() 
    {
        return $this->type_of_user;
    }
}



?>