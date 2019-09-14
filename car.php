<?php
class Car{

    private $speed;
    public $color = "red";

    /**
     * @return string
     */
    public function accelerator($value)
    {
    $this->speed += $value;
    echo "the speed is ".$this->speed;
    echo "\n";
    }
    public function stop(){
        $this->speed = 0;
        echo "the car is stop the speed is ".$this->speed;
    }
}
$carobj = new Car();
$carobj->accelerator(20);
$carobj->stop();
?>
<?php
echo 'hellooooooooooo';
?>
