<?php session_start() 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Productos</h1>
        <div class="contenedorProductosPrincipal">
            
            
            
            
            <div class="contenedorProductos">
                <form class="formulario" name="formulario" method="POST" action="carrito.php">
                    <h2>Celular</h2>
                    <input type="hidden" name="nombreProducto" value="Celular">
                    <h4>Celular de alta gama</h4>
                    <img src="img/celular.jpg" alt="celular">
                    <select name="cantidad" id="cantidad"> 
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <input type="submit" name="enviar" value="Poner en carrito">
                </form>
            </div>
            
            

            
            <div class="contenedorProductos">
                <form class="formulario" name="formulario" method="POST" action="carrito.php">
                    <h2>SmartWatch</h2>
                    <input type="hidden" name="nombreProducto" value="SmartWatch">
                    <h4>Con lector de constantes </h4>
                    <img src="img/smartwatch.webp" alt="smartwatch">
                    <select name="cantidad" id="cantidad"> 
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <input type="submit" name="enviar" value="Poner en carrito">
                </form>
            </div>
            </form>
            
            
            
        </div>
    </section>
</body>
</html>

