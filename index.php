<!DOCTYPE html>
<?php
	require 'vendor/autoload.php';
?>
<html>
	<head>
		<title>Vianey Bentes</title>
		<meta name="author" content="Esp. Paulo Tarciso">
		<meta name="description" content="Aula Inicial de css3, para TURMA de Sistemas para Internet">
		<meta name="keywords" content="fotos, css, internet, ">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="css/flexboxgrid.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<style type="text/css" media="all">
			* {
				margin: 0 ;padding: 0; box-sizing: border-box;
			}

			body {
				font-family: 'Lato', Calibri, Arial, sans-serif; color:#000;
				background: -moz-linear-gradient(bottom, #b6ebf7, #FFFDFF 100%);
				background: -webkit-gradient(linear, left bottom, left top,
				color-stop(0, #b6ebf7), color-stop(0.75, #201e1f));
			}
			h1, h2, h3, h4, h5, h6 {
				margin:0; padding: 10px;
			}
			.principal {
				margin-top: 5px; margin-bottom: 5px;
			}
			.aux {
				text-align: center; background-color: #00796b
			}
			.sidebar2, .footer {border: 1px solid #388e3c}

			.header{ width: 100%; height:200px;
/*
				background: url("img/logo1.png")  no-repeat 0% 5%;
				background-size: 45% 100%;
*/
			}
			.banner {width:100%; height:500px; box-shadow: 2px 2px 5px #000; border-radius:2px}
			img:hover{
				opacity: 0.8;
			}
			.logo{width: 100%; height:200px;}

		</style>

		<link href="menu-efeitos/js/jimgMenukwicks.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="menu-efeitos/js/jquery.js"></script>
		<script type="text/javascript" src="menu-efeitos/js/jquery-easing-1.3.pack.js"></script>
		<script type="text/javascript" src="menu-efeitos/js/jquery-easing-compatibility.1.2.pack.js"></script>
		<script type="text/javascript" src="menu-efeitos/js/jquery.kwicks-1.5.1.pack.js"></script>
			<!--[if IE]>
			<script type="text/javascript">
			$().ready(function() {
				$(".jimgMenu ul").kwicks({max: 310, duration: 400, easing: "easeOutQuad"});
			});
			</script>
			<![endif]-->
		<script type="text/javascript">
			$().ready(function() {
				$('.jimgMenu ul').kwicks({max: 310, duration: 300, easing: 'easeOutQuad'});
				});
		</script>

<!-- menu fixado -->

        <link rel="stylesheet" href="css/slicknav.css">
        <script src="js/jquery.slicknav.js"></script>

        <script>
            jQuery("document").ready(function($){
                $('#menu').slicknav();
                var nav = $(".conteudo-menu");
                var div = $(".pesquisa");
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 200) {
                        nav.addClass("menu-fixo");
                        div.addClass("pesquisa_2");
                    } else {
                        nav.removeClass("menu-fixo");
                        div.removeClass("pesquisa_2");
                    }
                });
            });
        </script>
<!--  fim menu fixado .......................................................................... -->
	</head>
	<body>
			<!--
				extra small 	- xs
				small 			- sm
				medium 			- md
				large 			- lg

				Classe	Dispositivo												Resolução
				XS		(Extra Small) Dispositivos muito pequenos (Phones)		<768px
				SM		(Small) Dispositivos pequenos (Tablets)					≥768px
				MD		(Medium) Dispositivos médios (Desktops)					≥992px
				LG		(Large) Dsipositivos grandes (Desktops)					≥1200px
			-->



		<div class="container-fluid">

		<!-- Cabeçaho Principal -->
			<header class="row">
				<div class="row between-xs-12">
				    <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
				        <div class="box col-xs-offset-1">
				           <img class="logo" src="img/logo1.png" alt="">
				        </div>
				    </div>
					<div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
						<div class="header principal">
							<div class="box col-xs-offset-2">
								<?php include("menu-efeitos/imgmenu.php");?>
							</div>
						</div>
					</div>
				</div>
			</header>

			<!-- banner Principal -->
			<div class="col-xs-12 principal">
				<div class="sidebar1">
					<figure>
						<img class = "banner" src="img/pororoca.jpg" alt="Poporoca Brasil" title="João Vianey">
					</figure>
				</div>
			</div>

			<!-- Conteúdo Principal 1-->
			<div class="row principal middle-xs between-xs">
				<div class="col-xs-12 col-md-2 first-md">
					<div class="sidebar2">
						<h3>Sidebar 1</h3>
						<br><br><br><br>
					</div>
				</div>
				<div class="col-xs-12 col-md-2 last-md">
					<div class="sidebar2">
						<h3>Sidebar 2</h3>
						<br><br><br><br>
					</div>
				</div>
				<div class="col-xs-12 col-md-2 first-md">
					<div class="sidebar2">
						<h3>Sidebar 3</h3>
						<br><br><br><br>
					</div>
				</div>
				<div class="col-xs-12 col-md-2 last-md">
					<div class="sidebar2">
						<h3>Sidebar 4</h3>
						<br><br><br><br>
					</div>
				</div>
				<div class="col-xs-12 col-md-2 first-md">
					<div class="sidebar2">
						<h3>Sidebar 5</h3>
						<br><br><br><br>
					</div>
				</div>
				<div class="col-xs-12 col-md-2 last-md">
					<div class="sidebar2">
						<h3>Sidebar 6</h3>
						<br><br><br><br>
					</div>
				</div>
			</div>
			<!-- Conteúdo Principal 2-->
			<div class="row principal middle-xs between-xs">
				<div class="col-xs-12 col-md-2 first-md">
					<div class="sidebar2">
						<h3>Sidebar 1</h3>
						<br><br><br><br>
					</div>
				</div>
				<div class="col-xs-12 col-md-2 last-md">
					<div class="sidebar2">
						<h3>Sidebar 2</h3>
						<br><br><br><br>
					</div>
				</div>
				<div class="col-xs-12 col-md-2 first-md">
					<div class="sidebar2">
						<h3>Sidebar 3</h3>
						<br><br><br><br>
					</div>
				</div>
				<div class="col-xs-12 col-md-2 last-md">
					<div class="sidebar2">
						<h3>Sidebar 4</h3>
						<br><br><br><br>
					</div>
				</div>
				<div class="col-xs-12 col-md-2 first-md">
					<div class="sidebar2">
						<h3>Sidebar 5</h3>
						<br><br><br><br>
					</div>
				</div>
				<div class="col-xs-12 col-md-2 last-md">
					<div class="sidebar2">
						<h3>Sidebar 6</h3>
						<br><br><br><br>
					</div>
				</div>
			</div>
			<!-- Base Principal -->

			<footer class="row">
				<div class="col-xs-12">
					<div class="footer principal">
						<h2>Base</h2>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>
