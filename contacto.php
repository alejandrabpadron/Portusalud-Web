<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<link rel="icon" type="image/png" href="img/favicon.png"/>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/css/mdb.min.css" rel="stylesheet">
	<!-- Inclusión de la hoja de estilos CSS -->
	<link rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Glegoo' rel='stylesheet' type='text/css'>
	<title>Contáctenos | Portusalud & Prevención</title>
</head>
<script type="text/javascript">
	document.oncontextmenu = function(){return false;}
</script>
<script type="text/javascript">
    function verificar(form1){
        form1.nombre.focus();
        if ( form1.nombre.value == ""){
            alert( "Campo de Nombre requerido");
            form1.nombre.focus();
            return false;
       }
        if ( form1.asunto.value == ""){
            alert( "Campo de Asunto requerido");
            form1.asunto.focus();
            return false;
       }
        if ( form1.mensaje.value == ""){
            alert( "Campo de Mensaje requerido");
            form1.mensaje.focus();
            return false;
       }
	    return true;
            }
</script>
<style type="text/css">
	#div-logo{
		width: 20%;
		background-color: #fff;
	}
	#logo{
		margin-left: 50px;
		margin-top: -60px;
	}
	#div-location{
		margin-left: 300px;
		margin-top: 60px;
	}
	#div-icon-location{
		margin-left: -60px;
		margin-top: 40px;
	}
	#div-text-icon-location{
		margin-top:-50px;
		margin-left: -25px;
		font-family: 'Arial Narrow';
        font-size: 12px;
	}
	#div-telephone{
		margin-left: -500px
		margin-top: -60px;
	}
	#div-icon-telephone{
		margin-left: 455px;
		margin-top: -55px;
	}
	#div-text-icon-telephone{
		margin-top: -45px;
		margin-left: 495px;
		font-family: 'Arial Narrow';
        font-size: 12px;
	}
	#div-email{
		margin-left: -700px
		margin-top: -60px;
	}
	#div-icon-email{
		margin-left: 660px;
		margin-top: -55px;
	}
	#div-text-icon-email{
		margin-top: -45px;
		margin-left: 705px;
		font-family: 'Arial Narrow';
        font-size: 12px;
	}
	* {
  		padding: 0;
  		box-sizing: border-box;
	}

	header {
  		height: 64px;
  		background: #00ADEF;
  		color: #FFF;
  		display: flex;
  		justify-content: flex-end;
	}

	#btn-menu {
  		display: none;
	}

	header label {
	  font-size: 30px;
	  cursor: pointer;
	  display: none;
	}

	.menu ul {
	  background: #00ADEF;
	  display: flex;
	  list-style: none;
	}

	.menu ul ul {
	  display: none;
	}

	.menu a {
	  display: block;
	  padding: 15px 20px;
	  color: #FFF;
	  text-decoration: none;
	  line-height: 9px;
	  font-family: 'Arial Narrow';
	  font-size: 18px;
	  font-weight: bold;
	}

	.menu a:hover {
	  background: #81CEEA;
	}

	.menu a i {
	  margin-left: 10px;
	}

	.menu ul li:hover ul {
	  transition: all 0.3s ease;
	  display: block;
	  position: absolute;
	}
	.subsubmenu{
		background-color: #2E3092;
		font-size: 12px;
	}

	@media (max-width: 768px) {
	  header label {
	    display: block;
	    padding-top: 16px;
	    padding-right: 16px;
	    transition: all 0.4s ease;
	  }
  
	  .menu {
	    position: absolute;
	    top: 64px;
	    left: 0;
	    width: 70%;
	    transform: translateX(-100%);
	    transition: all 0.3s;
	  }
	  
	  .menu ul {
	    flex-direction: column;
	    //display: block;
	  }
	  
	  .menu ul li:hover ul {
	    display: none;
	    position: static;
	  }
	  
	  .menu a i {
	    position: absolute;
	    right: 16px;
	    line-height: 32px;
	  }
	  
	  #btn-menu:checked ~ .menu {
	    transform: translateX(0%);
	  }
  
	}
	#div-contacto{
		margin-left: 20px;
		margin-right: 20px;
	}
		label{
		width: 150px;
		display: inline-block;
	}
	#form-contact{
		margin-left: 10px;
	}
</style>
<body>
	<div align="left">
		<div align="left" id="div-logo">
			<img src="img/portusalud.png" align="left" id="logo" width="130">
		</div>
		<div align="left" id="div-location">
			<div id="div-icon-location">
				<img src="img/location.png" width="30">
			</div>
			<div id="div-text-icon-location">
				<strong>
					<p>SEDE PRINCIPAL</p>
				</strong>
				<p>CARRERA 13 # 24-51 MONTERÍA</p>
			</div>
		</div>
		<div align="left" id="div-telephone">
			<div id="div-icon-telephone">
				<img src="img/telephone.png" width="33">
			</div>
			<div id="div-text-icon-telephone">
				<strong>
					<p>CONTACTO</p>
				</strong>
				<p>7890368</p>
			</div>
		</div>

		<div align="left" id="div-email">
			<div id="div-icon-email">
				<img src="img/email.png" width="30">
			</div>
			<div id="div-text-icon-email">
				<strong>
					<p>CORREO DE CONTACTO</p>
				</strong>
				<p>PORTUSALUDYPREVENCION@GMAIL.COM</p>
			</div>
		</div>
	</div>
	<br>
	<header>
	    <input type="checkbox" id="btn-menu" />
	    <label for="btn-menu"><i class="fa fa-bars"></i></label>
	    <nav class="menu">
	      <ul>
	        <li class="submenu">
	        	<a href="#">NOSOTROS</a>
			        <ul>
			            <li class="subsubmenu">
			            	<a href="mision_vision.html">Misión y Visión</a>
			            </li>
			            <li class="subsubmenu">
			            	<a href="obj_institucionales.html">Objetivos Institucionales</a>
			            </li>
			            <li class="subsubmenu">
			            	<a href="val_institucionales.html">Valores Institucionales</a>
			            </li>
			            <li class="subsubmenu">
			            	<a href="#">Galería</a>
			            </li>
			            <li class="subsubmenu">
			            	<a href="efinancieros.html">Estados Financieros</a>
			            </li>
			        </ul>
	        </li>
	        <li class="submenu">
	        	<a href="servicios.html">SERVICIOS</a>
	        </li>
	        <li>
	        	<a href="contacto.html">CONTACTO</a>
	        </li>
	      </ul>
	    </nav>
	</header>
	<center>
		<img src="img/contacto.png" width="100%">
	</center>
</div>
<br>
<div id="div-contacto">
	<a href="index.html">
		<img src="img/volver.png" width="40">
	</a>
	<br>
	<br>
	<h3>
		Contáctenos
	</h3>
	<br>
	<p align="justify">
		Nuestra información de contacto
	</p>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1971.6916230880938!2d-75.88207609794304!3d8.749963694511527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1543440318247" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div id="form-contact">
	<form name="form1" method="post" action="pagina2.php" onSubmit="return verificar(this)">
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" id="nombre" class="required">
		<br>
		<label for="asunto">Asunto:</label>
		<input type="text" name="asunto" id="asunto" class="required">
		<br>
		<label for="mensaje">Mensaje:</label>
		<textarea name="mensaje" id="mensaje" cols="30" rows="10" class="required"></textarea>
		<input type="submit" name="">
	</form>
</div>   
<br>
<br>
<center>
	<img src="img/horarios.png" width="100%">
</center>
<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">
    <!-- Footer Links -->
    <div class="container text-center text-md-left">
      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">PORTUSALUD & PREVENCIÓN</h6>
          <p>Nuestro principal objetivo es brindar un excelente servicio a nuestros clientes y la satisfacción total de cada uno de ellos.</p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">NOSOTROS</h6>
          <p>
            <a href="mision_vision.html">Misión y Visión</a>
          </p>
          <p>
            <a href="obj_institucionales.html">Objetivos Institucionales</a>
          </p>
          <p>
            <a href="val_institucionales.html">Valores Institucionales</a>
          </p>
          <p>
            <a href="#!">Galería</a>
          </p>
          <p>
            <a href="efinancieros.html">Estados Financieros</a>
          </p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <a href="servicios.html"><h6 class="text-uppercase mb-4 font-weight-bold">SERVICIOS</h6></a>
          <p>
            <a href="#!">Consulta Médica Especializada</a>
          </p>
          <p>
            <a href="#!">Exámenes de Laboratorio</a>
          </p>
          <p>
            <a href="#!">Imágenes Diagnósticas</a>
          </p>
          <p>
            <a href="#!">Odontología</a>
          </p>
        </div>

        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <a href="contacto.html"><h6 class="text-uppercase mb-4 font-weight-bold">CONTACTO</h6></a>
          <p>
            <i class="fa fa-home mr-3"></i>Cra. 13 # 24-51, Montería</p>
          <p>
            <i class="fa fa-envelope mr-3"></i>portusaludyprevencion@gmail.com</p>
          <p>
            <i class="fa fa-phone mr-3"></i>7890368</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Footer links -->
      <hr>
      <!-- Grid row -->
      <div class="row d-flex align-items-center">
        <!-- Grid column -->
        <div class="col-md-7 col-lg-8">
          <!--Copyright-->
            <p class="text-center text-md-left">© 2018 Copyright:
            	<a href="https://www.portusaludyprevencion.ga">
              		<strong>PORTUSALUD & PREVENCIÓN IPS.</strong>
            	</a>
            	All rights reserved.           	
            </p>       
		    <p>
          		Desarrollado por: 
  				<strong>MABP</strong>
  				<img src="img/paper-plane.png" width="25">
          	</p>
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0">
          <!-- Social buttons -->
          <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fa fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
    <!-- Footer Links -->
  </footer>
  <!-- Footer -->
</body>
</html>