<?php 
    if(isset($_GET["id"])){
        $tarea = new Tarea($_GET["id"]);
        $tarea -> eliminarTarea();
        $url = "index.php?pid=".base64_encode("presentacion/Listar.php");
        header("Location: ".$url);
    }else{
        header("Location: index.php");
    }
?>