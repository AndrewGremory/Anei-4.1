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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

</head>
<body>

<div class="container text-center">
		<h1 class="text-center">CENTRO DE ACOPIO ANEI</h1>
		<hr>
		<div class="row text-center">
        <input type="text" id="bus" onkeyup="busqueda();"  placeholder="Buscar...">
        </div>
		<hr>
		<h2 class="text-center">LOTES</h2>
  <div class="row justify-content-md-center">		
    <div class="col-md-15">
     <div id="mostrar_mensaje"></div>
    
   </div>
   </div>
</div>
    
			<!-- -----------------MODIFICAR --------------------------------->	
      <div class="modal fade" id="prosecadora">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content row-1 col-md-6">
    
      
      
            <!-- cabecera del di??logo -->
            <div class="modal-header">
              <h4 class="modal-title">PRODUCTOS A SECAR</h4>
             <button type="button" class="close" data-dismiss="modal">X</button>
            </div>
      
            <!-- cuerpo del di??logo -->
            <div class="modal-body">
                <div class="container-fluid">   
                <form>       
                        
                
                        <div class="form-group row ">
                          CODIGO:
                          <div class="col-lg-7">
                            <input type="text" class="form-control" id="codigo_producto" name="codigo_producto" ><br>
                          </div>
                        </div>

                        <div class="form-group row ">
                          CANTIDAD:
                          <div class="col-lg-7">
                            <input type="number" class="form-control" id="cantidad_secadora" name="cantidad_secadora" placeholder="0" min="0"><br>
                          </div>
                        </div>

                         <div class="form-group row">
                          <div class="offset-lg-1 col-lg-8">
                          
                            <button  onclick="produ_secadora();">Guardar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal" >Cerrar</button>
                          </div> 
                         </div>
                        </form>
                   </div>            
               </div>
        

              
          </div>
        </div>
      </div>
     
<!-- ----------------- EMPIEZA CODIGO AJAX ---------------------------------> 
</body>
</html>
<script type="text/javascript">

<!-- ----------------- BUSQUEDA BONIFICACION--------------------------------->  
     var parametros = 
      {        
        "accion":"1"
      };

      $.ajax({
        data: parametros,
        url: 'CONSULTA_SECADORA2.php',
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
<!-- ----------------- ELIMINAR ---------------------------------> 
function eliminar(eliminar)
    { 

      Swal.fire({
        title: 'Are you sure?',
        text: 'No podras revertirlo!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          elimi = eliminar;
      var parametros = 
      {
        "eli" : elimi,
        "accion" : "2"
      };
     
      $.ajax({
        data: parametros,
        url: 'CONSULTA_SECADORA2.php',
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

          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
        }
      })

      return false;
    }
    
<!-- ----------------- ELIMINAR --------------------------------->
</script>
<!-- ----------------- TERMINA CODIGO AJAX ---------------------------------> 
