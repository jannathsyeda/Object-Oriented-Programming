<?php

class shape{

}

class shapes{
   public $shapes;
   function __construct(){
       $this->shapes=array();

   }

   function addshapes(shape $shape)
   {
       array_push($this->shapes,$shape);
   }

   function totalshapes(){
       return count($this->shapes);
   }
}

class rectangle extends shape{

}
class square extends shape
{

}

$shapecollections=new shapes();
$shapecollections->addshapes(new rectangle());
$shapecollections->addshapes(new square());

echo $shapecollections->totalshapes();