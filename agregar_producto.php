
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <link rel= "stylesheet" href="./public12/css/main.css">
</head>
  <body>

  <section  class="section_alta" id="dar_alta">

<div class="card mb-3" id="card" style="max-width: 740px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./public12/imagenes/teatime.jpg" class="img-fluid rounded-start" id="imagen_agregar" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" id="titulo-card">Alta de un producto</h5>

        <form method="post" action="" class="row g-3">
          <div class="col-md-12">
            <label for="nombre_producto" class="form-label">Nombre:</label>
            <input type="text" name="nombre_producto"  class="form-control" id="nombre_producto">
          </div>
          
          <div class="col-12">
            <label for="descripcion_producto" class="form-label">Descripción:</label>
            <input type="text" name="descripcion_producto" class="form-control" id="descripcion_producto">
          </div>
          <div class="col-6">
            <label for="cantidad_producto" class="form-label">Stock:</label>
            <input type="text" name="cantidad_producto" class="form-control" id="cantidad_producto">
          </div>
          <div class="col-6">
            <label for="precio_producto" class="form-label">Precio:</label>
            <input type="text" name="precio_producto" class="form-control" id="precio_producto">
          </div>
      </div>
    </div>
  </div>
  <div class="d-grid gap-2 col-6 mx-auto">
  <button type="submit" name="boton_agregar" class="btn btn-primary">AGREGAR PRODUCTO</button>
  </div>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="./proyecto.php" button class="btn btn-outline-primary me-md-2" id="boton_cancelar" type="button" disabled>CANCELAR</a>
  </div>
</form>
  
  </div>
</div> 
</section>


<?php


if(!empty($_POST['nombre_producto']) && !empty($_POST['descripcion_producto']) && !empty($_POST['cantidad_producto']) && !empty($_POST['precio_producto'])){


 $conexion = mysqli_connect("localhost:3306", "root", "", "proyecto_integrador");
 
  $query = "INSERT INTO productos (nombre_producto, descripcion_producto, cantidad_producto, precio_producto) VALUES ('".$_POST['nombre_producto']."', '".$_POST['descripcion_producto']."', '".$_POST['cantidad_producto']."', '".$_POST['precio_producto']."')";
 
  $resultado = mysqli_query($conexion, $query);
 
  if($resultado === true){
     echo "<p>¡Se agregó correctamente el producto!</p>";
    
}
else{
  echo "<p>¡Hubo un error, vuelva a intentarlo!</p>";
 
}

mysqli_close($conexion);

}

?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

