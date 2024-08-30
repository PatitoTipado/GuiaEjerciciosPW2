<?php

class Saludar
{
    private $nombre;
    private $apellido;
    public function __construct($nombre, $apellido){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
    }

    public function getSaludoFormal($horario)
    {
        $hora="";

        if($horario>24|| !is_numeric($horario) ){
            return "epa esa hora no existe". $hora;
        }
        if($horario>5 && $horario<13){
            $hora="Buenos dias";
        }else if($horario>=13 && $horario<21) {
            $hora = "buenas tardes";
        }else{
            $hora="buenas noches";
        }

        return "hola " . $this->nombre . " ".  $this->apellido . " ". $hora;
    }

    public function getSaludoInformal($horario)
    {
        $hora="";

        if($horario>24|| !is_numeric($horario) ){
            return "epa esa hora no existe". $hora;
        }
        if($horario>5 && $horario<13){
            $hora="que tenga un buen dia";
        }else if($horario>=13 && $horario<21) {
            $hora = "que tengas una buena tarde";
        }else{
            $hora="que tengas una buena noche";
        }

        return "Hola " . $hora;
    }

}
?>