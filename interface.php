<?php
interface Basehuman{
    function eat();
    function run();
    function sleep();

}

interface animal extends Basehuman{
    
    function canEat();
  
}

class human implements animal{
    function canEat(){}
  function eat()
  {

  }
   function run()
   {

   }

    function sleep(){}

 

}

class me implements animal{
    function canEat(){}

    function eat()
  {
    echo "eating";
  }
   function run()
   {

   }

    function sleep(){}



}


$h1= new me();
//echo $h1 instanceof Basehuman; 
echo $h1->eat();
