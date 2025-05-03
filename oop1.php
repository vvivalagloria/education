<?php 

class BaseCalc {

    protected $a;
    protected $b;

    public function __construct($a = 0, $b = 0) {
        $this->a = $a;
        $this->b = $b;
    }

    public function calculate(){
        return $this->a ." & ". $this->b;
    }

}

class AddCalc extends BaseCalc{
    public function calculate(){
        return $this->a + $this->b;
    }
}

class MinusCalc extends BaseCalc{
    public function calculate(){
        return $this->a - $this->b;
    }
}


$obj = new BaseCalc(1, 2);
echo $obj->calculate(); // 12

echo "<br/>";

$plus = new AddCalc(1, 2);
echo $plus->calculate(); // 3

echo "<br/>";

$min = new MinusCalc(1, 2);
echo $min->calculate(); // -1

?>

