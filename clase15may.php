<?php
//final
//abstract
//static

abstract class Embarcaciones {
    protected $eslora; 
    public $manga;
    public static $color = "gris"; 

    public function __construct($eslora, $manga)
    {
        $this->eslora = $eslora; 
        $this->manga = $manga;
    }

    final public static function getColor(){
        echo"La embarcacion es de color " . self::$color; 
    }

    public function getInfo() : void {
        echo "La embarcacion tiene $this->eslora eslora, y tiene una manga de: $this->manga"; 
    }

    public function getManga() : void {
        echo "La embarcacion tiene $this->manga manga"; 
    }
}

//$embarcaciones = new Embarcaciones (65, 10);  cxuando es una clase abstracta no se puede utiliza, debdio a que el proposito es proporcionar una base sobre la cual otras clases pueden extenderse, 


class Tiburonera extends Embarcaciones{
    public $motor;

    public function __construct($eslora = 0, $manga = 0, $motor = 0)
    {
        $this->motor = $motor; 
        parent::__construct($eslora, $manga);
    }
    
    public function getInfo() : void {
        echo "La embarcacion $this->eslora eslora, y tiene una manga de: $this->manga";
        echo " y tiene un motor de: $this->motor";
    }

}



$tiburonera75 = new Tiburonera(27,6); 
$tiburonera75->getInfo();


class Lancharapida extends Embarcaciones {
    public function getInfo(): void
    {
        echo "La Lancha rapida tiene  $this->eslora eslora, y tiene una manga de: $this->manga";
    }

}

$Lancharapida = new Lancharapida(25,5); 
$Lancharapida->getInfo();
