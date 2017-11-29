<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Empresa Simulada</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<style type="text/css">
	aside{
		padding-top: 1%;
		padding-bottom: 1%;
		margin-top:1%;
		margin-bottom: 1%;
		background-color: #7d7b8e;
	}
	header div div.container-fluid{
		float: right;
		padding-bottom: 1%;
		margin-top: 3%;
	}
	div img {
		margin-top: 1%;
	}
	body {

	}
	.uno {
		background-color:#000000;    		
	}
	.tab-pane {
		padding-bottom: 15px;

	}
</style>
</head>
<body>
	<?php include "php/navbar.php"; ?>
	<div class="container">
		<br>
		
    <div class="col-md-12">
    	<div id="carousel-1" class="carousel slide" data-ride="carousel">
    		<!--Indicadores-->
    		<ol class="carousel-indicators">
    			<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
    			<li data-target="#carousel-1" data-slide-to="1"></li>
    			<li data-target="#carousel-1" data-slide-to="2"></li>
    		</ol>

    		<!--contenedor de los slide-->
    		<div class="carousel-inner" role="listbox">
    			<div class="item active">
    				<img src="imagenes/1-s.jpg" class="img-responsive" alt="">
    				<div class="carousel-caption hidden-xs hidden-sm">
    					<h3>Este es nuestro Slide #1</h3>
    					<p>Lorem ipsum dolor sit amet.</p>
    				</div>
    			</div>
    			<div class="item">
    				<img src="imagenes/2-s.jpg" class="img-responsive" alt="">
    				<div class="carousel-caption hidden-xs hidden-sm">
    					<h3>Este es nuestro Slide #2</h3>
    					<p>Lorem ipsum dolor sit amet.</p>
    				</div>
    			</div>
    			<div class="item">
    				<img src="imagenes/3-s.jpg" class="img-responsive" alt="">
    				<div class="carousel-caption hidden-xs hidden-sm">
    					<h3>Este es nuestro Slide #3</h3>
    					<p>Lorem ipsum dolor sit amet.</p>
    				</div>
    			</div>
    		</div>

    		<!-- Controles -->
    		<a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
    			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    			<span class="sr-only">Anterior</span>
    		</a>
    		<a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
    			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    			<span class="sr-only">Siguente</span>
    		</a>
    	</div>
    </div>
</div>
</header>
<div class="container">
	<section class="main row">
		<article class="col-xs-12 col-sm-12 col-md-12">
			<h3>Article</h3>
			<div role="tabpanel">

				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#seccion1" aria-controls="seccion1" data-toggle="tab" role="tab">Seccion #1</a></li>
					<li role="presentation"><a href="#seccion2" aria-controls="seccion2" data-toggle="tab" role="tab">Seccion #2</a></li>
					<li role="presentation"><a href="#seccion3" aria-controls="seccion3" data-toggle="tab" role="tab">Seccion #3</a></li>
				</ul>

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="seccion1">
						<h3>Seccion #1</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam possimus sit dolor obcaecati tenetur nesciunt magni molestias vel doloribus maxime corrupti cupiditate explicabo facilis, ipsa nihil, mollitia laborum saepe libero! <br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. In ipsum unde, quam delectus error blanditiis ut illum tenetur temporibus sunt, provident odio magnam! Hic ipsam, consequatur vitae. Perferendis dolores, ratione! <br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam possimus sit dolor obcaecati tenetur nesciunt magni molestias vel doloribus maxime corrupti cupiditate explicabo facilis, ipsa nihil, mollitia laborum saepe libero! <br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. In ipsum unde, quam delectus error blanditiis ut illum tenetur temporibus sunt, provident odio magnam! Hic ipsam, consequatur vitae. Perferendis dolores, ratione! <br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam possimus sit dolor obcaecati tenetur nesciunt magni molestias vel doloribus maxime corrupti cupiditate explicabo facilis, ipsa nihil, mollitia laborum saepe libero! <br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. In ipsum unde, quam delectus error blanditiis ut illum tenetur temporibus sunt, provident odio magnam! Hic ipsam, consequatur vitae. Perferendis dolores, ratione! <br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam possimus sit dolor obcaecati tenetur nesciunt magni molestias vel doloribus maxime corrupti cupiditate explicabo facilis, ipsa nihil, mollitia laborum saepe libero! <br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. In ipsum unde, quam delectus error blanditiis ut illum tenetur temporibus sunt, provident odio magnam! Hic ipsam, consequatur vitae. Perferendis dolores, ratione!
						</p>
					</div>

					<div role="tabpanel" class="tab-pane" id="seccion2">
						<h3>Seccion #2</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam possimus sit dolor obcaecati tenetur nesciunt magni molestias vel doloribus maxime corrupti cupiditate explicabo facilis, ipsa nihil, mollitia laborum saepe libero! <br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. In ipsum unde, quam delectus error blanditiis ut illum tenetur temporibus sunt, provident odio magnam! Hic ipsam, consequatur vitae. Perferendis dolores, ratione! <br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam possimus sit dolor obcaecati tenetur nesciunt magni molestias vel doloribus maxime corrupti cupiditate explicabo facilis, ipsa nihil, mollitia laborum saepe libero! <br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. In ipsum unde, quam delectus error blanditiis ut illum tenetur temporibus sunt, provident odio magnam! Hic ipsam, consequatur vitae. Perferendis dolores, ratione!
						</p>
					</div>

					<div role="tabpanel" class="tab-pane" id="seccion3">
						<h3>Seccion #3</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam possimus sit dolor obcaecati tenetur nesciunt magni molestias vel doloribus maxime corrupti cupiditate explicabo facilis, ipsa nihil, mollitia laborum saepe libero! <br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. In ipsum unde, quam delectus error blanditiis ut illum tenetur temporibus sunt, provident odio magnam! Hic ipsam, consequatur vitae. Perferendis dolores, ratione! <br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam possimus sit dolor obcaecati tenetur nesciunt magni molestias vel doloribus maxime corrupti cupiditate explicabo facilis, ipsa nihil, mollitia laborum saepe libero! <br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. In ipsum unde, quam delectus error blanditiis ut illum tenetur temporibus sunt, provident odio magnam! Hic ipsam, consequatur vitae. Perferendis dolores, ratione!
						</p>
					</div>
				</div>

			</div>
		</article>
	</section>
	<div class="row">
		<div class="color1 col-xs-12 col-sm-6 col-md-3">
			<h3>Columna</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<h3>Columna</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
			</p>
		</div>
		<div class="color1 col-xs-12 col-sm-6 col-md-3">
			<h3>Columna</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<h3>Columna</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			</p>
		</div>
	</div>
</div>
<footer>
	<div class="container footer">
		<h3>Virginio Gomez</h3>
	</div>
</footer>

<script src="jss/jquery.js"></script>
<script src="jss/bootstrap.min.js"></script>
</body>
</html>