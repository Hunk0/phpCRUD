<?php

class Conexion{
    private $mysqli;
    private $resultado;

    public function abrir(){
        $this -> mysqli = new mysqli("localhost", "root", "", "testbd", 3306);
        $this -> mysqli -> set_charset("utf8");
    }

    public function ejecutar($sentencia){
        $this -> resultado = $this -> mysqli -> query($sentencia);
    } 

    public function extraer(){
        return $this -> resultado -> fetch_row();
    }

    public function cerrar(){
        $this -> mysqli -> close();
    }
}

?>
