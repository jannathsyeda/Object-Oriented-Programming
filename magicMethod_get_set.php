<?php

class main{
    private $name;
    private $age;
    private $contact;

    function __construct($name='', $age='', $contact=''){
        $this->name=$name;
        $this->age=$age;
        $this->contact=$contact;

    }

    function __get($property)
    {
        return $this->property;
    }

    function __set($property,$value)
    {
       $this->$property=$value;
    }
}

$h1=new main('fahima','2','001133355');
echo $h1->name='';
