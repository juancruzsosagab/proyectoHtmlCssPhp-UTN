<!DOCTYPE html>
<html>
<head>
	<title>Proyecto - Entrega Actividad Integradora Módulo 2</title>
	<link rel="stylesheet" type="text/css" href="Proyecto.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8"/>
</head>
<body>
	<header>
		<div id="marca"></div>
		<nav id="botonera1">
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#about_us">About us</a></li>
				<li><a href="#info">Info</a></li>
			</ul>
		</nav>
		<nav id="botonera2-redes-contactos">
			<ul>
				<li id="facebook"><a href="https://www.facebook.com/" target="new"><img src="imagenes/facebook.png" alt="facebook"></a></li>
				<li id="instagram"><a href="https://www.instagram.com" target="new"><img src="imagenes/instagram.png" alt="instagram"></a></li>
				<li id="instagram"><a href="#" target="new"><img src="imagenes/llamada.png" alt="llamada"></a></li>
				<li id="whatsapp"><a href="https://wa.me/2613733585" target="new"><img src="imagenes/whatsapp.png" alt="Imagen principal"></a></li>
			</ul>
		</nav>
	</header>

	<section id="home">
		<div id="img_principal">
			<img src="imagenes/imagen_principal.jpg" alt="Imagen principal">
		</div>
		<article id="text_principal">
			<h1>"Beer. Now there's a temporary solution. I hope I didn't brain my damage. I don't like being outdoors, Smithers."</h1>
		</article>
	</section>

	<section id="services">
		<div id="img_1">
			<img src="imagenes/crecimiento.png" alt="Crecimiento">
		</div>
		<div id="img_2">
			<img src="imagenes/dolar.png" alt="Tiempo">
		</div>
		<div id="img_3">
			<img src="imagenes/tienda.png" alt="Tienda">
		</div>
		<article id="services_1">
			<p>I didn't get rich by signing checks...</p>
		</article>
		<article id="services_2">
			<p>Oh, I'm in no condition to drive. Wait a minute. I don't have to listen to myself. I'm drunk.</p>
		</article>
		<article id="services_3">
			<p>What's the point of going out? We're just going to wind up back here anyway</p>
		</article>
	</section>

	<section id="about_us">
		<div id="img_4">
			<img src="imagenes/workplace.jpg" alt="workplace">
		</div>
		<aside id="about_1">
			<p>Inflammable means flammable? What a country. You know, the one with all the well meaning rules that don't work out in real life, uh, Christianity. You don't win friends with salad. Slow down, Bart! My legs don't know how to be as long as yours.</p>
		</aside>
	</section>
	<section id="info">
		<nav id="botoneraphp">
			<ul>
				<li><a href="proyecto.php?id=ho#info">Homero</a></li>
				<li><a href="proyecto.php?id=ma#info">Marge</a></li>
				<li><a href="proyecto.php?id=ba#info">Bart</a></li>
				<li><a href="proyecto.php?id=li#info">Lisa</a></li>
			</ul>
		</nav>

		<?php 
		if(isset($_GET['id'])){	
			switch ($_GET['id']) {
				case 'ho':
					$nombre='Homero';
					$edad='44';
					$imagenSimpsons='homero.jpg';
					$peso='200kg';
					break;
				
				case 'ma':
					$nombre='Marge';
					$edad='41';
					$imagenSimpsons='marge.jpg';
					$peso='80kg';					
					break;
				
				case 'ba':
					$nombre='Bart';
					$edad='8';
					$imagenSimpsons='bart.jpg';
					$peso='40kg';					
					break;
				
				case 'li':
					$nombre='9';
					$edad='asd';
					$imagenSimpsons='lisa.jpg';
					$peso='50kg';					
					break;


			}


		?>

		<article id="info_php">
			<div id="nombre">
				<h2>
					Nombre: <?php echo $nombre; ?> 
				</h2>

				<h3>
					Edad: <?php echo $edad; ?>
				</h3>  
			
				<p> 
					Peso: <?php echo $peso; ?> 
				</p>
				
			</div>
			
			<div id="imagenSimpsons"> <img src="imagenes/<?php echo $imagenSimpsons?>">
		
			</div>
			
			</article>
		
	<?php } ?>
	</section>

	<section id="mysql">  
		<div id="solicitud">
			<h4>Formulario</h4>
		<form action="registrar.php" method="POST">
			<input class="campos" type="text" name="nombre_solicitud" id="nombre_solicitud" placeholder="Nombre">
			<input class="campos" type="text" name="apellido" id="apellido" placeholder="Apellido">
			<input class="campos" type="email" name="email" id="email" placeholder="Correo electrónico">
			<input class="campos" type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
			<p>Estoy de acuerdo con <a href="#"> Terminos y Condiciones</a> </p>
			<input class="boton" type="submit" value="Registrar">
		</form>

		
		
		</div>
		
		
		
		
	</section>
	<footer>
		<div id="footer_1">
			<a href="https://www.afip.com.ar" target="new"><img src="imagenes/afip.jpg" alt="afip"></a>
			<p>&nbsp&nbspCopyright © Todos los derechos reservados</p>
		</div>
		<div id="footer_2">
			<p>Design by Juan Cruz Sosa</p>

		</div>
	</footer>
</body>
</html>