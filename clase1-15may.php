<?php 
// DEFINICION DE LA CLASE PRODUCTO
class Producto{
    // DEFINICION DE ATRIBUTOS
    public $precio;
    public $nombre;
    private $disponible;

//metodo constructor 
    public function __construct(int $precio= 0, string $nombre = 'sin nombre', bool $disponible = false)
    {
        $this->precio = $precio;
        $this->nombre = $nombre;
        $this->disponible = $disponible;
    }

    // DEFINICION DE METODOS

    public function mostrarNombreProducto() : void{
        echo $this->nombre;
    }

    public function mostrarPrecioProducto() : void{
        echo $this->precio;
    }
    public function mostrarDisponibleProducto() : void{
        if ($this->disponible){
         echo "Disponible";
        }else{
            echo "No Disponible ";
        }
        
    }
    //metodos getter //fuera de una clase se utiliza si se declara como privado
    public function getDisponibilidad() : string{
        return $this->disponible ? 'SI ESTA DISPONIBLE' : 'NO ESTA DISPONIBLE';
    }
    //metodos setter 
    public function setDisponibilidad(bool $disponible) : void{
        $this->disponible= $disponible ;
    }


}

// CREACIÓN DE UN OBJETO
// CREAR UNA INSTANCIA
$mesa = new Producto(); 

// $mesa->nombre = "Mesa";
// $mesa->precio = 500;
// $mesa->disponible = true;



// $silla = new Producto(); 

// $silla->nombre = "Silla grande";
// $silla->precio = 100;
// $silla->disponible = false;



echo "<pre>";
var_dump($mesa);
echo "</pre>";
// echo "<pre>";
// var_dump($silla);
// echo "</pre>";

// $mesa->mostrarNombreProducto();
// echo " ";
// $mesa->mostrarPrecioProducto ();
// echo " ";
// $mesa->mostrarDisponibleProducto ();
// echo "<br>";
// $silla->mostrarNombreProducto ();
// echo " ";
// $silla->mostrarPrecioProducto ();
// echo " ";
// $silla->mostrarDisponibleProducto ();




