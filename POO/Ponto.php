<?php
class Ponto
{   
    private $x;
    private $y;
    private static $contador=0;

    public function __construct($x, $y)
    {
        $this->setX($x);
        $this->setY($y);
        self::setContador();
    }

    public function calcularDistancia(Ponto $p){
        $valorX= pow(($p -> getX - $this->x), 2);
        $valorY= pow(($p -> getY - $this->y), 2);
        return sqrt($valorX + $valorY);
    }
    public function calcularDistancia2($x2, $y2){
        $valorX= pow(($x2 - $this->x2), 2);
        $valorY= pow(($y2- $this->y2), 2);
        return sqrt($valorX + $valorY);
    }
    public function calcularDistancia3($x1, $x2, $y1, $y2){
        $valorX= pow(($x2 - $x1),2);
        $valorY= pow(($y2 - $y1),2);
        return sqrt($valorX + $valorY);
    }
    private static function setContador()
    {
        self::$contador++;
    }
    public static function getContador()
    {
        return self::$contador;
    }

    public function getX()
    {
        return $this->x;
    }
    public function setX($x)
    {
        $this->X = $x;
    }

    public function getY()
    {
        return $this->y;
    }
    public function setY($Y)
    {
        $this->Y = $Y;
    }
}
