<?php
class  districtsCollection implements IteratorAggregate,Countable{
    public $districts;

    function __construct()
    {
        $this->districts=array();
    }

    function add($district)
    {
        array_push($this->districts,$district);
    }

    function getIterator()
    {
        return new ArrayIterator($this->districts);
    }

    function count()
    {
        return count($this->districts);
    }
}

$districts=new districtsCollection;
$districts->add("a");
$districts->add("b");
$districts->add("c");

echo count($districts);