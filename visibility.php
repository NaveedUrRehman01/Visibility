<?php

class school{
    const LARGE = "large";
    const SMALL = "small";
    public $color = "white";
    public $size;
    public $width = "150ft";
    private $height = "120ft";
    private $length = "130ft";

    public function room(){
echo "hello";

    }
}
//private cannot be visible outside the class while public can be visible outside the class;
$chalk = new school();
$chalk->color;
$chalk->width;
$chalk->size = school::LARGE;
var_dump($chalk);
print_r($chalk);
$chalk->room();

?>