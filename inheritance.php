<?php
class Animal
{
     public $name ;

    function __construct($name)
    {
        $this->name = $name ;

    }

    function sleep()
    {
        echo "{$this->name} can sleep\n";
    }

    function greeting()
    {
        echo "{$this->name} say parentmethodwelcom\n" ;
    }

    function sayhi()
    {
        echo " hi\n";
    }

    function eat()
    {
        echo "{$this->name} can eat rice\n";
    }

    function run()
    {
        echo "{$this->name} can run\n";
    }

}

class cat extends Animal{
   
    function run()
    {
        echo " hi\n";
    }
    
    function greeting()
    {
        parent::greeting();
        echo "{$this->name} say childwelcome\n" ;
      
    }
        function sayhi()
        {
            echo "hlw";
        }
     

}


$fahima= new Animal('fahima');
$fahima->eat();
$fahima->sayhi();
$fahima->greeting();


$cat1=new cat('mimi');
$cat1->greeting();
$cat1->run();
$cat1->sayhi();