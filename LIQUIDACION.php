<!DOCTYPE html>
<html>
<head>
	<title>Probando</title>
	<script src="jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel = "hoja de estilo" >  
<script src = "http://code.jquery.com/jquery-2.0.3.min.js" > </script>  
<script src = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js" > </script>

<link href = "bootstrap-editable / css / bootstrap-editable.css" rel = "stylesheet" >  
<script src = "bootstrap-editable / js / bootstrap-editable.js" > </script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></script>
<script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>
<body>

<div class="container text-center">
		<h1 class="text-center">CENTRO DE ACOPIO ANEI</h1>
		<hr>
		<div class="row text-center">


                        <input type="text" id="cuadro_buscar" onkeyup="mi_busqueda();" class="form-control" list="listanavegadores" placeholder="Buscar...">
                        <datalist id="listanavegadores">
                        <?php
                            $conexion = mysqli_connect("localhost", "root", "", "anei") or die("Problemas con la conexión");
                            $regi = mysqli_query($conexion, "select  *from compra A where Not exists (select * from liquidacion B where A.marca = B.codigo_liquidacion)") or die("Problemas en el select:" . mysqli_error($conexion));
                            while ($consu = mysqli_fetch_array($regi)) 
                            {                           
                        ?>        
                        <option label="<?php echo $consu['nombre_compra'].' '. $consu['cedula']?>" value="<?php echo $consu['marca']?>" >
                        
                        <?php } ?>
                        </datalist>                     
    </div>

    
 

		<hr>
		<div class="row justify-content-md-center">		
     <div class="col-md-8 ">
      <div id="mostrar_mensaje"></div>
     </div>
    </div>
</div>
    
			<!-- -----------------CAFE --------------------------------->	
     
<!-- ----------------- EMPIEZA CODIGO AJAX ---------------------------------> 
</body>
</html>
<script type="text/javascript">
 
  
<!-- ----------------- INSERTAR--------------------------------->  
function liquidacion()
{
  var bonificacion = document.getElementById("bonificacion").value
  var aporte = document.getElementById("aporte").value
  var ahorro = document.getElementById("ahorro").value
             
      if (bonificacion == "" || aporte == "" || ahorro == ""){
       
        return false
      }else {
        
      var parametros = 
      {
        "codigo_liquidacion" : $("#codigo_liquidacion").val(),
        "precio_dia" : $("#precio_dia").val(),
        "rendimiento" : $("#rendimiento").val(),
        "bonificacion" : $("#bonificacion").val(),
        "prima_producto" : $("#prima_producto").val(),
        "precio_final1" : $("#precio_final1").val(),
        "subtotal1" : $("#subtotal1").val(),
        "politica" : $("#politica").val(),
        "observaciones_liquidacion" : $("#observaciones_liquidacion").val(),
        "dian1" : $("#dian1").val(),
        "asociados1" : $("#asociados1").val(),
        "neto_pagar21" : $("#neto_pagar21").val(),
        "ahorro" : $("#ahorro").val(),
        "total_ahorro1" : $("#total_ahorro1").val(),
        "kilos_liquidacion" : $("#kilos_liquidacion").val(),
        "cedula_liquidacion" : $("#cedula_liquidacion").val(),
        "aporte1" : $("#aporte1").val(),
        "nombre_liquidacion" : $("#nombre_liquidacion").val(),
        "producto_liquidacion" : $("#producto_liquidacion").val(),
        "descuento_secado" : $("#descuento_secado").val(),
        "accion":"12"
      };
      
      $.ajax({
        data: parametros,
        url: 'ANEI2.php',
        type: 'POST',
      
        beforesend: function()
        {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {  
          $('#mostrar_mensaje').html(mensaje);
          
        }
        });

     
   
    return false;  
  }  
    }
 
   
     
<!-- ----------------- BUSQUEDA--------------------------------->  

	function mi_busqueda()
    { 
    	buscar = document.getElementById('cuadro_buscar').value;
     
      var parametros = 
      {
        "mi_busqueda" : buscar,
        
        "accion" : "11"
      };

      $.ajax({
        data: parametros,
        url: 'ANEI2.php',
        type: 'POST',
        
        beforesend: function()
        {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mostrar_mensaje').html(mensaje);
        }
      });
    }
    <!-- ----------------- BUSQUEDA BONIFICACION--------------------------------->  
  
    

<!-- ----------------- BUSQUEDA BONIFICACION--------------------------------->
</script>
<!-- ----------------- TERMINA CODIGO AJAX ---------------------------------> 
