<!DOCTYPE>
<html>
<head>
	<title>NiKPro - youtuber</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<header class="bg-dark">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-dark  nav-wrapper">
		    	<a href="index.html" class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsExample04">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.html">Home <span class="sr-only">Home</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="blog.html">Blog</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Me</a>
							<div class="dropdown-menu" aria-labelledby="dropdown04">
							  <a class="dropdown-item" href="#">Our team</a>
							  <a class="dropdown-item" href="merch.html">Merch</a>
							  <a class="dropdown-item" href="beats.html">Beats</a>
							</div>
						</li>
					</ul>
				</div>
		    </nav>
		</div>
	</header>

	<main>
		<section class="section-slider">
			<div class="container">
				<div class="slider">
					<div id="slider" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block" src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block" src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block" src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block" src="<?php echo get_template_directory_uri(); ?>/images/4.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block" src="<?php echo get_template_directory_uri(); ?>/images/5.jpg" alt="First slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#slider" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</section>



		<section class="section-about-me">
			<div class="container">
				<h2>Welcome! Some info about me</h2>
				<p>Всем привет! Меня зовут Ник и я очень люблю хоррор игры! Во время прохождений не скуплюсь на комментарии и яркие эмоции. Давайте получать адреналин вместе!
				</p>
			</div>
		</section>

		<section class="section-playlist">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<a href="https://www.youtube.com/watch?v=_NX_nflqOQ8" class="block-thumbnail">
							<figure class="block-playlist">
								<img style="max-width: 100%;" src="<?php echo get_template_directory_uri(); ?>/images/thumbnail/thumbnail-2.png">
								<h3>Resident Evil 7</h3>
								<p>Всем привет! Добрался я наконец-то до замечательной игры из серии Resident Evil. Сегодня играю совместно с девчонкой, поэтому нервы на пределе! Нужно не выглядеть трусом xD </p>
							</figure>
						</a>
					</div>
					<div class="col-md-4">
						<a href="https://is.gd/7heS93" class="block-thumbnail">
							<figure class="block-playlist">
								<img style="max-width: 100%;" src="<?php echo get_template_directory_uri(); ?>/images/thumbnail/thumbnail-1.png">
								<h3>Outlast</h3>
								<p>Всем привет! В 2018, наверное все уже забыли о таком крутом хорроре, как Outlast, но это классика, которая будет жить в нашей памяти вечно!</p>
							</figure>
						</a>
					</div>
					<div class="col-md-4">
						<a href="https://is.gd/ktAYyh" class="block-thumbnail">
							<figure class="block-playlist">
								<img style="max-width: 100%;" src="<?php echo get_template_directory_uri(); ?>/images/thumbnail/thumbnail-3.png">
								<h3>Проклятье Черноводья</h3>
								<p>Всем привет! Сегодня, чтобы было веселее, я взял с собой своего брата Кирилла. Надеюсь, что вам понравится такая коллаборация!</p>
							</figure>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section class="section-social">
			<div class="container">
				<h2>Social links to my channels </h2>
				<div class="row">
					<div class="col-md-4">
						<a href="https://www.youtube.com/channel/UCfxKwyheRBHGtEBQaXZSyjg" class="block-thumbnail" target="_blank">
							<figure class="block-social">
								<img src="<?php echo get_template_directory_uri(); ?>/images/socials/youtube.png">
								<h3>YouTube</h3>
								<p>Кто хочет следить за мной в мире хоррор игр, вам сюда</p>
							</figure>
						</a>
					</div>
					<div class="col-md-4">
						<a href="https://www.instagram.com/n.prokopchyk/" class="block-thumbnail" target="_blank">
							<figure class="block-social">
								<img src="<?php echo get_template_directory_uri(); ?>/images/socials/promotion.png">
								<h3>Instagram promotion</h3>
								<p>Кто хочет стать популярней - реклама, директ</p>
							</figure>
						</a>
					</div>
					<div class="col-md-4">
						<a href="https://www.instagram.com/n.prokopchyk/" class="block-thumbnail" target="_blank">
							<figure class="block-social">
								<img src="<?php echo get_template_directory_uri(); ?>/images/socials/instagram.png">
								<h3>My Instagram</h3>
								<p>Кому интересна моя жизнь за кадром - сюда!</p>
							</figure>
						</a>
					</div>
				</div>
			</div>
		</section>
	</main>

	<script
	  src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous"></script>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/index.js"></script>
</body>
</html>
