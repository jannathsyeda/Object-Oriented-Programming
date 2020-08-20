<?php 
class motorcar{
    private $paramiters;
    function __construct($displacement,$capacity,$milage){
        $this->paramiters=[];
        $this->paramiters['displacement']=$displacement;
        $this->paramiters['capacity']=$capacity;
    }

    function __isset($name){
        if(!isset( $this->paramiters[$name]))
        {
            echo "found";
            false;
        }
        true;
    }

    function __unset($name)
    {
        unset($this->paramiters[$name]);
    }

    function __get($name)
    {
        echo  $this->paramiters[$name];
    }

    function __set($name,$value)
    {
      echo  $this->paramiters[$name]=$value;
    }
}

$pulser=new motorcar('56','55','7');
$pulser->displacement;

if(isset($pulser->trei))
{
    echo "found";
}
else{
    echo "not found";
}
