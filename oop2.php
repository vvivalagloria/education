<?php

class Figure {

    protected $area;
    protected $color;
    protected const NUM_SIDES = 0;

    public function infoAbout(){
        return "Это геометрическая фигура!";
    }

}

class Rectangle extends Figure{

    private $a, $b;
    const NUM_SIDES = 4;

    public function __construct($a = 0, $b = 0) {
        $this->a = $a;
        $this->b = $b;
    }

    public function getArea() {
        return $area = $this->a * $this->b;
    }

    final public function infoAbout(){
        return "Это класс прямоугольник. У него " . self::NUM_SIDES . " стороны.";
    }
}

class Square extends Figure {
 
    private $a;
    const NUM_SIDES = 4;

    public function __construct($a = 0) {
        $this->a = $a;
    }

    public function getArea() {
        return $area = $this->a * $this->a;
    }

    final public function infoAbout(){
        return "Это класс квадрат. У него " . self::NUM_SIDES . " стороны.";
    }

}

class Triangle extends Figure {  

    private $a, $b, $c;
    const NUM_SIDES = 3;

    public function __construct($a = 0, $b = 0, $c = 0) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    private function isTriangle(){ // Сумма 1 и 2 сторон треугольника должна быть больше 3 стороны
        return 
        $this->a + $this->b > $this->c && 
        $this->a + $this->c > $this->b && 
        $this->b + $this->c > $this->a;
    }

    public function getArea() {
        if ($this->isTriangle()){
            $p = ($this->a + $this->b + $this->c)/2;
            return $area = round(sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c)), 4); //округляем для удобства
        } else {
            return "Невозможные значения треугольника.";
        }
    }

    final public function infoAbout(){
        return "Это класс треугольник. У него " . self::NUM_SIDES . " стороны.";
    }
}


$rec1 = new Rectangle(4, 2);
echo $rec1->infoAbout();
echo "<br>";
echo $rec1->getArea();
echo "<br>";

$rec2 = new Rectangle(8, 4);
echo $rec2->getArea();
echo "<br>";

$sqr1 = new Square(2);
echo $sqr1->infoAbout();
echo "<br>";
echo $sqr1->getArea();
echo "<br>";

$sqr2 = new Square(4);
echo $sqr2->getArea();
echo "<br>";

$tri1 = new Triangle(2, 3, 6);
echo $tri1->infoAbout();
echo "<br>";
echo $tri1->getArea();
echo "<br>";

$tri2 = new Triangle(5, 2, 4);
echo $tri2->getArea();
echo "<br>";

?>