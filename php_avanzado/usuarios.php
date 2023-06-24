<?php
class Usuario{
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;

    public function __construct($nombre, $apellido, $fecha_nacimiento){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fecha_nacimiento= $fecha_nacimiento;
    }

    public function get_nombre(){
        return $this->nombre;
    }

    public function get_apellido(){
        return $this->apellido;
    }

    protected function get_edad(){
        $anio_actual = intval(date('Y'));
        $mes_actual = intval(date('m'));
        $dia_actual = intval(date('d'));

        $anio_persona = intval(date('Y', strtotime($this->fecha_nacimiento)));
        $mes_persona = intval(date('m', strtotime($this->fecha_nacimiento)));
        $dia_persona = intval(date('d', strtotime($this->fecha_nacimiento)));

        $anio_diferencia = $anio_actual - $anio_persona;

        if (($mes_actual < $mes_persona) or ($mes_actual == $mes_persona and $dia_actual < $dia_persona)){
            return $anio_diferencia - 1;
        }
        return $anio_diferencia;
    }

    public function imprime_caracteristicas(){
        return "<p>Soy $this->nombre $this->apellido y mi edad es " . $this->get_edad() . "</p>";
    }
}

?>