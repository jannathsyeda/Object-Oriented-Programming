<?php

abstract class main{
    abstract function eat();
}

class shape extends main{
    function eat()
    {

    }

    function run($a)
    {
        echo "running";
    }

}
$h1=new shape();
$h1->run(1);
