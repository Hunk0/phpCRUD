<?php 

class tareaDAO{
    private $id;
    private $detalles;

    public function tareaDAO($id="", $detalles=""){
        $this -> id = $id;
        $this -> detalles = $detalles; 
    }

    //CRUD -> CRATE READ UPDATE DELETE

    public function crearTarea(){
        return "INSERT INTO tarea (detalles) VALUES ('".$this->detalles."')";
    }

    public function listarTareas(){
        return "SELECT * FROM tarea";
    }

    public function consultarTarea(){
        return "SELECT * FROM tarea WHERE id=".$this->id;
    }

    public function actualizarTarea(){
        return "UPDATE tarea SET detalles='".$this->detalles."' WHERE id =".$this->id;
    }

    public function eliminarTarea(){
        return "DELETE FROM tarea WHERE id=".$this->id;
    }
        
    

}

?>