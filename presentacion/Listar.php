<?php

    $tarea = new Tarea();
    $tareas = $tarea -> listarTareas();

?>

<div class="container">
    <?php for($i =0 ; $i<sizeof($tareas); $i++){ ?>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tarea <?php echo ($i+1) ?></h5>
                    <p class="card-text">Detalles: <?php echo $tareas[$i]->getDetalles(); ?> </p>
                </div>
                <a type="button" href=<?php echo "index.php?pid=".base64_encode("presentacion/Actualizar.php")."&id=".$tareas[$i]->getId()?> class="btn btn-info">Editar</a>
                <a type="button" href=<?php echo "index.php?pid=".base64_encode("presentacion/Eliminar.php")."&id=".$tareas[$i]->getId()?> class="btn btn-danger">Eliminar</a>
            </div>
        </div>
    <?php    }    ?>
    
</div>