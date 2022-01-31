<?php

class Product {
    private $name;
    private $price;
    private $description;
    private $category; 
    private $color;
    private $ref;


    //CONSTRUCT
    public function __construct($_name, $_price, $_description, $_category, $_color, $_ref)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;
        $this->category = $_category;
        $this->color = $_color;
        $this->ref = $_ref;
    }



    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getRef()
    {
        return $this->ref;
    }
}

?>