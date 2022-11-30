<!doctype html>
<html lang="pt-BR">
  <head>
  	<title>Consulta Licenciamento Ambiental</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" style="background: white;"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight bg-dark">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li style="white-space: nowrap; font-size: 1.1em"><a class="text-light" href="?page=consultalicenca"><i class="fa-brands fa-pagelines"></i> Licenciamento</a></li>
		    		<li style="white-space: nowrap; font-size: 1.1em"><a class="text-light" href="#"><i class="fa-solid fa-bullhorn"></i> Denúncias Ambientais</a>
					<li style="white-space: nowrap; font-size: 1.1em"><a class="text-light" href="#"><i class="fa-solid fa-circle-info"></i> Info</a></li>
					<li style="white-space: nowrap; font-size: 1.1em; margin-top: 20px;"><a class="text-light" href="?page=restrict"><i class="fa-solid fa-ban"></i> Acesso Restrito</a></li>







				</ul>
			</nav>
		</aside> <!-- END COLORLIB-ASIDE -->

		<div id="colorlib-main" class="bg-white">
			<?php
				/*include("config.php");*/

				if (empty($_REQUEST)) {
				}else{
				switch ($_REQUEST['page']) {
					case "consultalicenca":
						include 'consultalicenca.php';
						break;
					case "restrict":
						include 'login.php';
						break;
					default:
						break;
				}
				}
				
			?>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://kit.fontawesome.com/791479aa38.js" crossorigin="anonymous"></script>

	</body>
</html>

