<?php 
class animal{
    public $name;
    function __construct($name)
    {
        $this->name=$name;
    }

 final  function sayhi()
    {
        echo "hi\n";
    }


}

class human extends animal{

    function hello()
    {
        echo "hello\n";
    }
}
    $h1= new human("fahi");
    $h1->sayhi();
    $h1->hello();


    //final er uno function takley takey overwright kora jabe na
