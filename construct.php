<?php
class human
{
   public $name;
    public   $age;
    function __construct($personname,$personage)
    {
        $this->name=$personname;
        $this->age=$personage;
        echo "my name is {$this->name}\n"; 
    }

    function sayhi()
    {

    }
}

$h1= new Human("fahima","23");

class fund{
   public $fund;
    function __construct($initial=0)
    {
        $this->fund=$initial;
    }

    function addfund($money)
    {
        $this->fund +=$money;

    }
    function reduce($money)
    {
        $this->fund -=$money;
    }
    function getTotalFund()
    {
        echo "Totall fund is {$this->fund}";
    }
}

$h1= new fund(100);
echo $h1->getTotalFund();