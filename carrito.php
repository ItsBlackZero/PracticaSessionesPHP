<?php
    session_start();
    
    if (!isset($_SESSION["carrito"])) {
        $_SESSION["carrito"] = [];
    }

    if(isset($_SESSION["carrito"])){
       $carrito = $_SESSION["carrito"];
        
        $nombreProducto = $_POST["nombreProducto"];
        $cantidad = $_POST["cantidad"];
        $carrito[] = array("nombreProducto" => $nombreProducto, "cantidad" => $cantidad);
    }

    $_SESSION["carrito"] = $carrito;
    var_dump($_SESSION["carrito"]);

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>
<body>
    <h1>Productos agregados al carrito</h1>
    <?php
    foreach ($_SESSION["carrito"] as $producto) {
        if (is_array($producto)) {
            echo "Nombre del Producto: " . $producto["nombreProducto"] . "<br>";
            echo "Cantidad: " . $producto["cantidad"] . "<br><br>";
        } 
    }
    ?>
</body>
</html>