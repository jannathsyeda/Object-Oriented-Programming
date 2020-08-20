<?php
class districtcollection implements IteratorAggregate {
    public $districts;

    function __construct(){
    $this->districts=array();
}

    function adddistricts($district)
    {
        array_push($this->districts,$district);
    }
    // function getdistricts()
    // {
    //     return $this->districts;
    // }
    
    function getIterator()
    {
        return new ArrayIterator($this->districts);
    }



}

$districts = new districtcollection;
$districts->adddistricts("a");
$districts->adddistricts("b");
$districts->adddistricts("c");

foreach($districts as $district)
{
    echo $district."\n";
}

