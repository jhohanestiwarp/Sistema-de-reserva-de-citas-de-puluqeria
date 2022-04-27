<!DOCTYPE html>
<html lang="en">


	<title>Formulario reserva</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="css/estilos.css">
  </head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>StyleBarber - Bootstrap 4 Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="barber_version">

    <!-- LOADER -->
    <div id="preloader">
        <div class="cube-wrapper">
		  <div class="cube-folding">
			<span class="leaf1"></span>
			<span class="leaf2"></span>
			<span class="leaf3"></span>
			<span class="leaf4"></span>
		  </div>
		  <div class="mus">
			<img src="images/lode-img.png" alt="" />
		  </div>
		  <span class="loading" data-name="Loading">SMBarber Loading</span>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

	<div class="top-add alert alert-light alert-dismissible">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Exitoso!</strong> Barberias Quibdo
	</div>
    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>	
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
						<li class="nav-item"><a class="nav-link" href="services.html#services">Galeria de cortes</a></li>
						<li class="nav-item active"><a class="nav-link" href="barbers.php#barbers">Reserva</a></li>
						
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<!-- Page Content -->
	<div id="page-content-wrapper">
		<div class="all-page-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="title title-1 text-center">
							<div class="much">
								<img src="uploads/mustache.png" alt=""/>
							</div>
							
							<div class="title--heading">
								<h1>Barberias Quibdo</h1>
							</div>
							<div class="clearfix"></div>
							
							<ol class="breadcrumb">
								<li><a href="index.html">Inicio</a></li>
								<li class="active">Barberia Quibdo</li>
							</ol>
							
						</div>
						<!-- .title end -->
					</div>
				</div>
			</div>
		</div><!-- end all-page-bar -->

		<div id="barbers" class="section lb">
			<div class="container">
				<div class="section-title row text-center">
					<div class="col-md-8 offset-md-2">
						<h3>RESERVA DE CITA</h3>
					</div>
				</div>
				<!-- FORMULARIO -->
			

				<form name="form" class="formulario" action="registro.php" method="POST">
					<p>id_reserva: <input placeholder="Ingrese el numero corespondiente a la galeria de fotos"  id="id_reserva" type="text" class="formulario__label" name="id_reserva"  value="<?= $_GET['id_cortes'] ?? ''  ?>"  required size="40" />  </p>
					<p>nombre: <input placeholder="Ingrese el nombre de la persona que reservara" id="nombre" type="text" class="formulario__label" name="nombre" required size="40"></p>
					<p>celular: <input placeholder="Ingrese el numero del celular de contacto" id="celular" type="text"class="formulario__label" name="celular" required size="40"></p>
					<p>fecha: <input placeholder="Ingrese la fecha en la que desea reservar" id="fecha"  type="DATE"class="formulario__label" name="fecha" required size="40"></p>
					<p>hora_inicio: <input placeholder="Ingrese hora en que desea iniciar la reserva"  id="hora_inicio" type="time" class="formulario__label" name="hora_inicio" required size="40"></p>
					<p>hora_fin: <input placeholder="Ingrese la hora que desea terminar,tenga en cuenta que depende del corte deseado	"  id="hora_fin" type="time"class="formulario__label" name="hora_fin" required size="40"></p>
				  <p>id_servicio_fk: <input placeholder="Ingrese el numero corespondiente a la galeria de fotos" id="id_servicio_fk" type="text"class="formulario__label" name="id_servicio_fk" value="<?= $_GET['id_cortes'] ?? ''  ?>"  required size="40"></p>
			  
				  
			  
					<p>
					  <input type="submit" class="formulario__submit" value="Registrar">

					  <br>
					  
					</p>    

					
			  
					<button id="submit" class="formulario__submit">Enviar a WhatsApp</button>
					<br>
					
					<!-- https://api.whatsapp.com/send?phone=573116770929&text=*_Barberia%20Lider_*%20%0AReservas%0A%0A*%C2%BFCual%20es%20tu%20nombre?*%0A"Nombres"%20%0A*Barbero%20de%20preferencia*%0A"Barbero"%20%0A -->
				 </form>

				 <
			  
				  <!-- Bootstrap JavaScript Libraries -->
				  <script src="js/form.js"></script>
				

					
					
					

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<script src="js/responsive-tabs.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    (function($) {
        "use strict";
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        smoothScroll.init({
            selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
            selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
            speed: 500, // Integer. How fast to complete the scroll in milliseconds
            easing: 'easeInOutCubic', // Easing pattern to use
            offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
            callback: function ( anchor, toggle ) {} // Function to run after scrolling
        });
    })(jQuery);
    </script>

</body>
</html>