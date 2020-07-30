<?php

require 'persistencia/TareaDAO.php';
require_once 'persistencia/Conexion.php';

class Tarea{
    private $id;
    private $detalles;

    private $conexion;
    private $tareaDAO;

    public function Tarea($id="", $detalles=""){
        $this -> id = $id;
        $this -> detalles = $detalles; 

        $this -> conexion = new Conexion();
        $this -> tareaDAO = new tareaDAO($id, $detalles);
    }

    //crud

    public function crearTarea(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> tareaDAO -> crearTarea());
        $this -> conexion -> cerrar();
    }

    public function consultarTarea(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> tareaDAO -> consultarTarea());
        $this -> conexion -> cerrar();
        $resultado = $this -> conexion -> extraer();
        if($resultado != null){
            $this -> id = $resultado[0];
            $this -> detalles = $resultado[1]; 
            $this -> tareaDAO = new tareaDAO($resultado[0], $resultado[1]);
        }
    }

    public function listarTareas(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> tareaDAO -> listarTareas());
        $this -> conexion -> cerrar();

        $resultados = array();
        $i=0;
        while(($resultado = $this -> conexion -> extraer()) != null){
            $resultados[$i] = new Tarea($resultado[0], $resultado[1]);
            $i++;
        }

        return $resultados;
    }

    public function actualizarTarea(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> tareaDAO -> actualizarTarea());
        $this -> conexion -> cerrar();
    }

    public function eliminarTarea(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> tareaDAO -> eliminarTarea());
        $this -> conexion -> cerrar();
    }


    //get and set

    public function getId(){
        return $this -> id;
    }

    public function setId($id){
        $this -> id = $id;
    }

    public function getDetalles(){
        return $this -> detalles;
    }

    public function setDetalles($detalles){
        $this -> detalles = $detalles;
    }

}

?>