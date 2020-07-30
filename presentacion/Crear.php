<?php
    if(isset($_POST["nueva"])){
        $tarea = new Tarea('', $_POST["detalles"]);
        $tarea -> crearTarea();
        $url = "index.php?pid=".base64_encode("presentacion/Listar.php");
        header("Location: ".$url);
    }

?>

<div class="container">
    <h2>Nueva Tarea</h2>
    <form action=<?php echo "index.php?pid=".base64_encode("presentacion/Crear.php")?> method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Detalles</label>
        <input name="detalles" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button name="nueva" type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>