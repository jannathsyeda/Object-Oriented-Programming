<?php
class color{
    public $color;
    function __construct($color="")
    {
        $this->color=$color;
    }

    function setcolor($color)
    {
        return $this->color=$color;
    }
    function __toString()
    {
        return "the color is {$this->color}";

    }
}
$h1=new color('red');
echo $h1;