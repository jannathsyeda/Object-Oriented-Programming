<?php
class main{

    const name="fahima";

    function constan_function()
    {
        
        echo self::name;
    }
}
 $h1=new main();
echo $h1::name;

//another process
//$h1=new main();
// $h1->constan_function();