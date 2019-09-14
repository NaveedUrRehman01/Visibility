<?php
class Account{


   public $balance ;

    public function deposit($amount ){
        $this->balance +=$amount;
        echo "u deposit amount ";
        echo $amount;
        echo "\n";
    }
    public function getbalance(){
        return $this->balance;
echo "\n";
    }

    public function withdraw($amount){
        if ($amount <=$this->balance){
            $this->balance -= $amount;
            echo "amount is withdraw \n";
            echo " ur remainng balance is \n".$this->balance;
        }
        else
            echo "u have insufficent balance";
    }

}
$accobj = new Account();
$accobj->balance = 0;
echo $accobj->getbalance();
$accobj->deposit(100);
$accobj->withdraw(30);


$num1 = 10;
$num2 = 12;
$sum = $num2 + $num2;

echo "sum is".$sum;

?>
