<?php
class planet{
    public $name;
    function __construct($name)
    {
        $this->name=$name;
    }


}

$h1=new planet('earth');
$h2=new planet('earth');

if($h1==$h2)
{
    echo "similar";

}
else{
    echo "not";
}


if($h1===$h2)
{
    echo "similar";

}
else{
    echo "not";
}