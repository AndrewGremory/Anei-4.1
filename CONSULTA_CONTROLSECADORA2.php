<!DOCTYPE html>
<html lang="es">
<?php session_start(); ?>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
 $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");

 $accion = $_POST['accion'];

 if($accion == 1)
{  
 ?>
        
        <table id="cesar" class="display" style="width:100%">
        <thead>
            <tr>
                <th>CODIGO</th>
                <th>FECHA</th>
                <th>HORA</th>
                <th>MUNICIPIO</th>

            </tr>
        </thead>      
		
		 	
		 <tbody>
         <?php
           $resul = mysqli_query($conexion,"select *from controlsecadora");
           while($consul = mysqli_fetch_array($resul))
           {  
            ?>
			 <tr>
				 <td><?php echo $consul['cod_secadora']?></td>
				 <td><?php echo$consul['fecha_secadora']?></td>
				 <td><?php echo$consul['hora_secadora']?></td>		 		
                 <td><?php echo $consul['municipio']?></td>					 
			 </tr>	
             <?php
            }	
            ?>	 
		 </tbody>			
        
       <tfoot>
         <tr>
                <th>CODIGO</th>
                <th>FECHA</th>
                <th>HORA</th>
                <th>MUNICIPIO</th>
         </tr>
     </tfoot>
 </table>
 <script type="application/javascript">
    $(document).ready( function () {
        $('#cesar').DataTable();
    } );
    </script>
 <?php
		}
if($accion == 2)
{ 
        $mi_busqueda = $_POST['mi_busqueda'];
		$resultados = mysqli_query($conexion," SELECT * FROM controlsecadora WHERE cod_secadora LIKE '%$mi_busqueda%'or fecha_secadora LIKE '%$mi_busqueda%' or hora_secadora LIKE '%$mi_busqueda%'");
        echo'
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>CODIGO</th>
                <th>FECHA</th>
                <th>HORA</th>
            </tr>
        </thead>

        ';
		
		while($consul = mysqli_fetch_array($resultados))
		{ 
		 echo'

		
		 <tbody>
			 <tr>
				 <td>'.$consul['cod_secadora'].'</td>
				 <td>'.$consul['fecha_secadora'].'</td>
				 <td>'.$consul['hora_secadora'].'</td>
				 
				
			 </tr>
			 </tr>
			 
		 </tbody>
		 
		 ';
		 }
        echo'
     <tfoot>
         <tr>
                <th>CODIGO</th>
                <th>FECHA</th>
                <th>HORA</th>
         </tr>
     </tfoot>
 </table>
';
}
     
     ?>
</body>
</html>