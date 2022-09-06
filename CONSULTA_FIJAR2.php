<!DOCTYPE html>
<html lang="es">

<head>
 <meta charset="utf-8">
	
</head>
<body>
<?php
 $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");

 $accion = $_POST['accion'];
 $mi_busqueda = $_POST['mi_busqueda'];
  
 $dtz = new DateTimeZone("America/Bogota");
 $dt = new DateTime("now", $dtz);
 $fecha= $dt->format("Y-m-d");
 $hora= $dt->format("h:i:s");

if($accion == 1)
{  $mi_busqueda = $_POST['mi_busqueda'];
 ?>      
		
            <table id="cesar" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>CEDULA</th>
                    <th>PRODUCTO</th>
                    <th>PRECIO FIJADO</th>
                    <th>CANTIDAD FIJADA</th>
                    <th>CANTIDAD VENDIDA</th>
                    <th>CANTIDAD FALTANTE</th>
                    <th>FECHA</th>
                    
                </tr>
            </thead>   
            
             <tbody>
             <?php
             $papa = mysqli_query($conexion,"select *from fijar WHERE cedula LIKE '%$mi_busqueda%'");

		     while ($papa1 = mysqli_fetch_array($papa))
		     { $cantidad= $papa1['cantidad']; $cedula = $papa1['cedula']; $nombre = $papa1['nombre']; $fecha_inicial = $papa1['fecha'];  $precio = $papa1['precio']; $producto = $papa1['producto'];}
             
             $kilos = 0;  $total = 0;
             $liqui = mysqli_query($conexion,"select *from liquidacion a WHERE cast(A.fecha_liquidacion as date)BETWEEN '$fecha_inicial' AND '$fecha' and cedula_liquidacion = $cedula");
             while($mama1 = mysqli_fetch_array($mama))
		     {  $kilos = $kilos + $mama1['kilos_liquidacion']; }    

                $total = $cantidad - $kilos;

             if ($total>=0) {
                $precio_dia = $precio;
             }
             else {
                $precio_dia = 0;
             }
            
            ?>
            <tr>
            <td><?php echo $nombre ?> </td> 
            <td><?php echo $cedula ?> </td>
            <td><?php echo $producto ?> </td>
            <td><?php echo $precio_dia ?> </td>
            <td><?php echo $cantidad ?> </td>
            <td><?php echo $kilos ?> </td>
            <td><?php echo $total ?> </td>
            <td><?php echo $fecha ?> </td>
            
      
             </tr> 
             <?php
            
             ?>
             </tbody>
           
                      
         <tfoot>
             <tr>
                    <th>NOMBRE</th>
                    <th>CEDULA</th>
                    <th>PRODUCTO</th>
                    <th>PRECIO FIJADO</th>
                    <th>CANTIDAD FIJADA</th>
                    <th>CANTIDAD VENDIDA</th>
                    <th>CANTIDAD FALTANTE</th>
                    <th>FECHA</th>
                   
             </tr>
         </tfoot>
     </table>
      
       <script> 
       $(document).ready(function () {
       $('#cesar').DataTable();
      });
      </script>
		<?php
        }
        ?>
</body>
</html>