<?php

        require 'conexion.php';
        $link = conectar();
        $sql = "SELECT idCategoria, catNombre 
                        FROM categorias";
        $resultado = mysqli_query($link, $sql);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Listado de categorías</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <main class="container">
            <h1>Listado de categorías</h1>

            <div class="list-group col-4">
        <?php
            while ( $categoria = mysqli_fetch_assoc($resultado) ) {
        ?>
                <span class="list-group-item list-group-item-action">
                    <?= $categoria['idCategoria'] ?>
                    -
                    <?= $categoria['catNombre'] ?>
                </span>
        <?php
            }
        ?>
            </div>

        </main>
    </body>
</html>
