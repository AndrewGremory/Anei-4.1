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
                <th>CANTIDAD</th>
                <th>LOTE</th>
                <?php 
                if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
                {?>
                <th>ELIMINAR</th>
                <?php } ?>
            </tr>
        </thead>      
		
		 	
		 <tbody>
         <?php
           $resul = mysqli_query($conexion,"select *from secadora");
           while($consul = mysqli_fetch_array($resul))
           {  
            ?>
			 <tr>				 
				 <td><?php echo$consul['codigo_producto']?></td>
				 <td><?php echo$consul['cantidad_secadora']?></td>		 		
                 <td><?php echo $consul['lote']?></td>		
                 <?php 
                 if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
                 {?>
                 <td><input type="button" class="btn btn-primary" id="codigo_secadora" value="Eliminar" onclick="eliminar(<?php echo $consul['codigo_secadora']?>);"></td>
                 <?php } ?>			 
			 </tr>	
             <?php
            }	
            ?>	 
		 </tbody>			
        
       <tfoot>
         <tr>
                <th>CODIGO</th>
                <th>CANTIDAD</th>
                <th>LOTE</th>
                <?php 
                if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
                {?>
                <th>ELIMINAR</th>
                <?php } ?>
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
  mysqli_query($conexion,"delete FROM secadora where codigo_secadora = $_POST[eli]");
?>        
  <table id="cesar" class="display" style="width:100%">
  <thead>
      <tr>
          <th>CODIGO</th>
          <th>CANTIDAD</th>
          <th>LOTE</th>
          <?php 
          if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
          {?>
          <th>ELIMINAR</th>
          <?php } ?>
      </tr>
  </thead>      
  
       
   <tbody>
   <?php
     $resul = mysqli_query($conexion,"select *from secadora");
     while($consul = mysqli_fetch_array($resul))
     {  
      ?>
       <tr>				 
           <td><?php echo$consul['codigo_producto']?></td>
           <td><?php echo$consul['cantidad_secadora']?></td>		 		
           <td><?php echo $consul['lote']?></td>		
           <?php 
           if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
           {?>
           <td><input type="button" class="btn btn-primary" id="codigo_secadora" value="Eliminar" onclick="eliminar(<?php echo $consul['codigo_secadora']?>);"></td>
           <?php } ?>			 
       </tr>	
       <?php
      }	
      ?>	 
   </tbody>			
  
 <tfoot>
   <tr>
          <th>CODIGO</th>
          <th>CANTIDAD</th>
          <th>LOTE</th>
          <?php 
          if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "gerente") 
          {?>
          <th>ELIMINAR</th>
          <?php } ?>
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
?>
</body>
</html>