<!DOCTYPE html>
<html>
<head>
	<title>Contáctenos</title>
	<link rel="icon" type="image/png" href="img/favicon.png"/>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/css/mdb.min.css" rel="stylesheet">
</head>
<script type="text/javascript">
	document.oncontextmenu = function(){return false;}
</script>
<body>
</body>
</html>
<?php
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

echo $nombre. " has enviado el siguiente mensaje: <br> " .$mensaje;

if(mail('contacto@portusaludyprevencion.ga', $asunto, $mensaje)){
	echo "mensaje enviado <br/> Te responderemos lo más pronto posible";
}else{
	echo "Lo sentimos mucho, pero tu mensaje no ha sido enviado :-(";
}
?>
