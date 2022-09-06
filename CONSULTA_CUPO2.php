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
 $fecha= $dt->format("Y");
 $hora= $dt->format("h:i:s");

if($accion == 1)
{ 
 ?>      
		
            <table id="cesar" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>CEDULA</th>
                    <th>CUPO CAFE</th>
                    <th>CUPO UTILIZADO</th>
                    <th>CUPO DISPONIBLE</th>
                    <th>CUPO CACAO</th>
                    <th>CUPO UTILIZADO</th>
                    <th>CUPO DISPONIBLE</th>
                </tr>
            </thead>   
            
             <tbody>
             <?php
             $cupo1 = mysqli_query($conexion,"select *from liquidacion join asociados on cedula_liquidacion=cedula_usuario where cedula_liquidacion LIKE '%$mi_busqueda%'");
             $cupodisponiblecafe = 0; $cupodisponiblecacao = 0; $cupousadocacao = 0; $cupousadocafe = 0; $cupocafe = 0; $cupocacao = 0;
             $positivo=0;

             while($cupo2 = mysqli_fetch_array($cupo1))
		     {$positivo=1;
                $x=date("Y", strtotime($cupo2['fecha_liquidacion'])); 
                $cupocacao= $cupo2['cupo_cacao']; $cupocafe= $cupo2['cupo_cafe'];
              
                $cedula= $cupo2['cedula_usuario']; $nombre= $cupo2['nombre_usuario'];

                if ($x== $fecha) 
                {
                    if ($cupo2['producto_liquidacion']=="cafe pergamino seco" or $cupo2['producto_liquidacion']=="cafe mojado") 
                    { $cupousadocafe= $cupousadocafe + $cupo2['kilos_liquidacion'];}

                    if ($cupo2['producto_liquidacion'] == "cacao seco" or $cupo2['producto_liquidacion'] == "cacao en baba") 
                    { $cupousadocacao= $cupousadocacao + $cupo2['kilos_liquidacion'];  }  

                    $cupodisponiblecafe =  $cupocafe - $cupousadocafe;
                    $cupodisponiblecacao = $cupocacao - $cupousadocacao;
                }
             } 
             $cupo3 = mysqli_query($conexion,"select *from asociados where cedula_usuario LIKE '%$mi_busqueda%'");
             if ($cupo4 = mysqli_fetch_array($cupo3))
		     {  $positivo=1;
                $cupocacao= $cupo4['cupo_cacao']; $cupocafe= $cupo4['cupo_cafe'];
                $cedula= $cupo4['cedula_usuario']; $nombre= $cupo4['nombre_usuario'];
            }
             if($positivo==1)
             {
            ?>
            <tr>
            <td><?php echo $nombre ?> </td> 
            <td><?php echo $cedula ?> </td>
            <td><?php echo $cupocafe ?> </td>
            <td><?php echo $cupousadocafe ?> </td>
            <td><?php echo $cupodisponiblecafe ?> </td>
            <td><?php echo $cupocacao ?> </td>
            <td><?php echo $cupousadocacao ?> </td>
            <td><?php echo $cupodisponiblecacao ?> </td>
             </tr> 
             <?php
             }
             ?>
             </tbody>
           
                      
         <tfoot>
             <tr>
                    <th>NOMBRE</th>
                    <th>CEDULA</th>
                    <th>CUPO CAFE</th>
                    <th>CUPO UTILIZADO</th>
                    <th>CUPO DISPONIBLE</th>
                    <th>CUPO CACAO</th>
                    <th>CUPO UTILIZADO</th>
                    <th>CUPO DISPONIBLE</th>
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