<?php  
class main {
    public $name;
    public $area;

    public function __construct($name){
    $this->name=$name;
    $this->calculation();
}

    function getarea()
    {
        echo "This {$this->name} 's area is {$this->area} squre\n\n";
    }

}

 class triangle extends main{

    public $a,$b,$c;
    function __construct($a,$b,$c){
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
        parent::__construct("triangle");

    }
     function calculation(){
         $perimiter=($this->a+$this->b+$this->c)/2;
         $this->area=sqrt( $perimiter*($perimiter-$this->a)*($perimiter-$this->b)*($perimiter-$this->c));

     }

 }

 class rectengle extends main{

    public $a,$b;
    function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;
    
        parent::__construct("rectangle");

    }
     function calculation(){
        
         $this->area=$this->a * $this->b;

     }

 }

 $tringle=new triangle(3,3,4);
$tringle->getarea();

$rectangle=new rectengle(3,3);
$rectangle->getarea();

