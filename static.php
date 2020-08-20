<?php
class mathCalculator{
    public $number;
    static $name;

    static function fibonacci($n){
        echo "hellow\n";
        self::$name="abc";
        echo self::$name."\n";
        echo "fibonacci series is up to {$n}\n";
    }

    static function dosomething()
    {
        echo "do somethig\n";
    }

        function factorial($n)
    {
        self::dosomething();
        echo "factorial series up to {$n}\n";
    }
}


//mathCalculator::fibonacci(7);
$math=new mathCalculator();
echo $math->factorial(5);


