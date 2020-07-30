<?php  if(isset($_GET["id"])){ 
            if(isset($_POST["detalles"])){
                $tarea = new Tarea($_GET["id"], $_POST["detalles"]);
                $tarea -> actualizarTarea();
                $url = "index.php?pid=".base64_encode("presentacion/Listar.php");
                header("Location: ".$url);
            }
            $tarea = new Tarea($_GET["id"]);
            $tarea -> consultarTarea();    
?>
    <div class="container p-3">
        <form action=<?php echo "index.php?pid=".base64_encode("presentacion/Actualizar.php")."&id=".$_GET["id"]?> method="post">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Editar Tarea:</label>
                <textarea name="detalles" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $tarea->getDetalles()?></textarea>
            </div>
            <button name="nueva" type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
<?php }else{
    $url = "index.php?pid=".base64_encode("presentacion/Listar.php");
    header("Location: ".$url);
    } 
?>