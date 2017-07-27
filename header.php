		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="UTF-8">
			<title>Criando um site responsivo do começo ao fim</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="css/geral.css">
			<link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">
			<link rel="stylesheet" href="css/plugins.css">
			<link rel="stylesheet" href="css/<?php echo $style; ?>.css">	
		</head>
		<body>
		<?php include_once 'includes/organisms/menu-responsivo.php'; ?>
					
			<div class="layout">
				<header>
					<div class="container">

						<div class="logo wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
							<a href="index.php">
								<img src="imagem/logo-topo.png" alt="Logo Topo Tag">
							</a>
						</div>
						<div class="links">
						    <?php include_once 'includes/organisms/menu.php'; ?>
							<a class="toggle" href="javascript:;">
								<span></span>
								<span></span>
								<span></span>
							</a>

							<ul class="social">
								<li class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
									<a href="#"><i class="fa fa-facebook" target="_blank"></i></a>
								</li>

								<li class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
									<a href="" target="_blank"><i class="fa fa-github-alt"></i></a>
								</li>
							</ul>
						</div>

						<h1><?php echo $chamada; ?></h1>

						<p>Code // Share // Reboot</p>

					</div>

				</header>

				<main>