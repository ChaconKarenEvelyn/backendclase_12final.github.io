<?php 

$id=$_GET["id"];

$conexion = mysqli_connect("localhost:3306", "root", "", "proyecto_integrador");

$query = "SELECT * FROM productos WHERE id_producto='$id'";

 $resultado = mysqli_query($conexion, $query);

 $unafila=mysqli_fetch_assoc($resultado);
         
      
          $unafila["nombre_producto"];
          $unafila["descripcion_producto"];
          $unafila["cantidad_producto"];
          $unafila["precio_producto"];



        

 if(isset($_POST['enviar'])){

  $nombre=$_POST['nombre'];
  $descripcion=$_POST['descripcion'];
  $cantidad=$_POST['cantidad'];
  $precio=$_POST['precio'];
 

  $query2= "UPDATE productos SET nombre_producto='$nombre', descripcion_producto='$descripcion', 
  cantidad_producto='$cantidad', precio_producto='$precio' WHERE id_producto=$id";
 $actualizar= mysqli_query($conexion, $query2);
 }



      
 mysqli_close($conexion);
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <link rel= "stylesheet" href="./public12/css/main.css">
</head>
  <body>

  <section id="section_editar">
<div class="card mb-3" id="card_editar" style="max-width: 740px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./imagenes/tea-5326194_1280.jpg" class="img-fluid rounded-start" id="imagen_editar" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" id="titulo-card">Editar un producto</h5>


        <form method='post' action='' class='row g-3 m-auto' >
          <div class='col-md-12'>
            <label for='inputEmail4' class='form-label'>Nombre:</label>
            <input type='text' name='nombre'  class='form-control' id='inputEmail4' value='<?php echo $unafila['nombre_producto']?>'>
          </div>
          
          <div class='col-12'>
            <label for='inputAddress' class='form-label'>Descripción:</label>
            <input type='text' name='descripcion' class='form-control' id='inputAddress' value='<?php echo $unafila['descripcion_producto']?>'>
          </div>
          <div class='col-6'>
            <label for='inputAddress2' class='form-label'>Stock:</label>
            <input type='text' name='cantidad' class='form-control' id='inputAddress2' value='<?php echo $unafila['cantidad_producto']?>'>
          </div>
          <div class='col-6'>
            <label for='inputAddress2' class='form-label'>Precio:</label>
            <input type='text' name='precio' class='form-control' id='inputAddress2' value='<?php echo $unafila['precio_producto']?>'>
          </div>
          
      </div>
    </div>
  </div>
  <div class='d-grid gap-2 col-6 mx-auto'>
  <button type="submit" name='enviar' class='btn btn-primary'>ACTUALIZAR</button>
  <input type='hidden' name='enviar' value=''>
          
  </div>
  <div class='d-grid gap-2 d-md-flex justify-content-md-end'>
  <a href="./proyecto.php" button class='btn btn-outline-primary me-md-2' id="cancelar_editar" type='button' disabled>VOLVER</a>
  </div>
</form>
  
  </div>
</div> 
  </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
