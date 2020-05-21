<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Left Sidebar - Landed by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
				<img class="sqaLogo"  src="images/sqaLogo.png" href="index.html"> 
				<nav id="nav">
					<ul>
						<li><a href="index.html">Inicio</a></li>
						<li>
							<a href="#">Guías</a>
							<ul>
								<li><a href="CP.html">Casos de prueba</a></li>
								<li><a href="PAP.html">PAP</a></li>
								<li><a href="repositorio.html">Repositorio</a></li>
								<li><a href="QM-RQM.html">QM Y RQM</a></li>

							</ul>
						</li>
						<li><a href="formatos.html">Formatos</a></li>
						<li><a href="5w+h.html">5W+H</a></li>
						<li><a href="glosario.html">Glosario</a></li>
					</ul>
				</nav>
			</header>

			<!-- Main -->
	
		<div class="container">
		    <div id="main" class="wrapper style1">
				<header class="major">
					<h2 class="font-weight-bold">5W+H</h2>
				</header>
					<div id="cont1">
						<p>La 5W+H es una metodología de
							análisis empresarial que consiste en
							contestar seis preguntas básicas:
							qué (WHAT), por qué (WHY), cuándo (WHEN), dónde (WHERE), quién
							(WHO) y cómo (HOW).<br>
							Esta regla
							creada por Lasswell (1979) puede
							considerarse como una lista de verificación mediante la cual es posible
							generar estrategias para implementar
							una mejora. </p>
							
							<img id="img-wh" src="images/5wh.png">
					</div>
					
					<div id="cont2">
						<h3 class="font-weight-bold" >Cuadrantes de pruebas</h3>
						<strong>-Este es el cuadrante de pruebas que maneja SQA al momento de usar 5w+h.</strong>
						<img id="img-cont2" src="images/cont2.jpg">
					</div>

					<div id="cont3">
						<h3 class="font-weight-bold" >Niveles de Prueba y TIPOS de Prueba
							JP&A
						</h3>
						<table id="table" class="table table-bordered table-active">
							<thead>
							  <tr>

								<th class="font-weight-bold" scope="col">NIVELES DE PRUEBA</th>
								<th class="font-weight-bold" scope="col">ENFOQUE</th>
								<th class="font-weight-bold" scope="col">TIPOS DE PRUEBA</th>
							  </tr>
							</thead>
							<tbody>
								<tr>							
									<td>Smoke</td>
									<td>Probar instalación</td>
									<td>-Pruebas de componente</td>
								</tr>
								<tr>
									<td>Modular</td>
									<td>Probar componente integrado</td>
									<td>-Funcional<br>
										-No funcional</td>
								</tr>
								<tr>
									<td>Integral</td>
									<td>Probar integración de componentes</td>
									<td>-Historias<br>
										-API o Servicios<br>
										-No funcional</td>
								</tr>
								<tr>
									<td>Sistema</td>
									<td>Comprobar que los componentes y su integración<br>
									funcionan adecuadamente y realizan las<br>
									operaciónes realizadas</td>
									<td>-Funcionales<br>
										-Historias<br>
										-No funcionales</td>
								</tr>

							</tbody>
						</table>
					</div>

					<div id="cont4">
						<h3 class="font-weight-bold" >Ejemplo estrategia de pruebas ágiles 5w+h</h3>
					
						<table id="table" class="table table-bordered table-active">
							<thead>
							  <tr>

								<th class="font-weight-bold" scope="col">5W+H</th>
								<th class="font-weight-bold" scope="col">PREGUNTA</th>
								<th class="font-weight-bold" scope="col">RESPUESTA</th>
								<th class="font-weight-bold" scope="col">DEFINICIÓN</th>
								
							  </tr>
							</thead>
							<tbody>
								<tr>							
									<td>Why</td>
									<td>Por que? (Propósito/Objetivo)</td>
									<td>Causa probable de que ocurra el problema.</td>
									<td>Es conveniente que en esta participen todos los actores, ya que la opinión de todos es muy importante ya que las otras 4 preguntas se basan en esta.</td>
								</tr>
								<tr>
									<td>Who</td>
									<td>Quien? (Participantes/Responsables)</td>
									<td>Participa en el problema.<br>O el área o puesto donde se presenta.</td>
									<td>Todas aquellas personas que forman parte de la situación a resolver: Directivos, Jefes de area, Personal operativo, Proveedores de servicio.</td>

								</tr>
								<tr>
									<td>What</td>
									<td>Que? (Producto objeto de pruebas)</td>
									<td>El problema</td>
									<td>Establecer con claridad las caracteristicas del problema:
										<ul>
											<li>Humanas</li>
											<li>Finacieras</li>
											<li>Logisticas</li>
											<li>Tecnológicas</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Where</td>
									<td>Donde? (Lugar/Ambiente/Recursos)</td>
									<td>Lugar donde ocurre el problema.</td>
									<td>Determinar la zona de conflicto, ubicación fisicá y instalaciones, o el lugar dentro de un proceso productivo.</td>
								</tr>
								<tr>
									<td>When</td>
									<td>Cuando? (Proceso/Tiempo)</td>
									<td>Referencia en el tiempo, en qué momento del día, o que fecha de corrección.<td>
									<ts>Identifique el momento, horario, turnos de trabajo para resolver el problema.</ts>
								</tr>
								<tr>
									<td>How</td>
									<td>Como ? (Pricipios/Metodos/Tecnicas)</td>
									<td>Forma en que ocurre el problema.</td>
									<td>Secuencia de sucesos que forman o desencadenan el problema.</td>
								</tr>


							</tbody>
						</table>

					</div>
			</div>

<!-- descargar archivo-->

<?php
 
 $fileName = basename('Refuerzo 5W+H_20190328_v1.PPTX');
 $filePath = 'subidas/'.$fileName;
 if(!empty($fileName) && file_exists($filePath)){
	 // Define headers
	 header("Cache-Control: public");
	 header("Content-Description: File Transfer");
	 header("Content-Disposition: attachment; filename=$fileName");
	 header("Content-Type: application/zip");
	 header("Content-Transfer-Encoding: binary");
	 
	 // Read the file
	 readfile($filePath);
	 exit;
 }else{
	 echo 'The file does not exist.';
 }
?>
<a href="5w+h.php?file=Refuerzo 5W+H.ppt">Descargar fichero</a>


		</div>
<!-- descargar archivo-->




		
		
        <!-- boostrap -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>