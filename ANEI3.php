<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script type="text/javascript">

    </script>

</head>
<body>
<?php

$conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");

	$accion = $_POST['accion'];
    
	$dtz = new DateTimeZone("America/Bogota");
    $dt = new DateTime("now", $dtz);
    $fecha= $dt->format("Y-m-d");
    $hora= $dt->format("h:i:s");


if($accion == 20)
{      
   mysqli_query($conexion,"insert into controlsecadora (fecha_secadora, hora_secadora, municipio) values ('$fecha','$hora', '$_SESSION[municipio]')");      
}

if($accion == 21)
{  
   $resultados = mysqli_query($conexion,"select *from controlsecadora  where fecha_secadora = '$fecha' and municipio = '$_SESSION[municipio]'");
   $suma = 0; $ultimo = 0;  $suma1 = 0;
   while($consulta = mysqli_fetch_array($resultados))
   { $ultimo = $consulta['cod_secadora']; $suma = $suma +1;}   
  
   mysqli_query($conexion,"insert into secadora (codigo_secadora, codigo_producto, cantidad_secadora, lote) values ($ultimo,'$_POST[codigo_producto]', $_POST[cantidad_secadora], 'LOTE - $_SESSION[municipio] - $fecha - $suma')"); 
     
   if ($ultimo == 0) 
   {  echo "<script>alert('LA SECADORA NO ESTA LISTA')</script>"; }      
 }

 $accion == 99;

 if($accion == 99)
 {      $ultimo=0;
    $resultado = mysqli_query($conexion,"select *from controlsecadora");
    while($consulta = mysqli_fetch_array($resultado))
    { $ultimo = $consulta['cod_secadora']; }
  $resul = mysqli_query($conexion,"select *from secadora where codigo_secadora = $ultimo");


  
  echo'
  <table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
      <tr>
          <th>CODIGO</th>
          <th>CANTIDAD</th>
      </tr>
  </thead>
  ';
  while($consul = mysqli_fetch_array($resul))
  { 
   echo'

   
   
   <tbody>
       <tr>
           <td>'.$consul['codigo_producto'].'</td>
           <td>'.$consul['cantidad_secadora'].'</td>
          
       </tr>
       
   </tbody>
   
   ';
   }
   echo'
  
</table>
';
  }
    

?>
</body>
</html>