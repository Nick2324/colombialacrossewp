
<!DOCTYPE html> 
<html>
<head>
	<title>Colombia Lacrosse</title>
	@include('include')
</head>
<body>
 	@include('encabezado')
 	<div class="row">
 		<div class="col-md-1"> 			
 			@include('menuPrincipal')
 		</div>
 		<div class="col-md-2">
 			menuBloqueConocimiento
 			@include('menuBloqueConocimiento')
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-md-2">
 			contenido
 			@include('contenido')
 		</div>
 		<div class="col-md-1">
 			feedRedesSociales
			@include('feedRedesSociales')
		</div>
	</div>
</body>
</html>