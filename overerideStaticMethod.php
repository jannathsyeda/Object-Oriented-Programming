<?php
class A{
    static function sayhi()
    {
        echo "hi\n";
    }
}
class B extends A{
static function sayhi()
{
    parent::sayhi();
    echo "hlw";

}

}
B::sayhi();
