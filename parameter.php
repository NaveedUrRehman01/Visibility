<?php
echo "this is for pratice";
echo "\n";

class food{
    public $color = "brown";
    public $taste = "delicious";

    public function method(){
        echo "hhi";
        echo $this->taste;
    }

}
 $kachalo = new food();
$kachalo->color;
$alo = new food();
$alo ->color;

$tenday = new food();
$tenday->color = "green";
$tenday->taste = "better";

var_dump($tenday);
print_r($tenday);

var_dump($kachalo);
print_r($kachalo);
var_dump($alo);
print_r($alo);

$over =new food();
$over->method();

?>
