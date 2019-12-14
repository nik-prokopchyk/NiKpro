<!DOCTYPE>
<html>
<head>
	<title>NiKPro - youtuber</title>
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<header class="bg-dark">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-dark  nav-wrapper">
		    	<a href="index.html" class="logo">
					<img src="images/logo.png">
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
							  <a class="dropdown-item" href="#">Beats</a>
							</div>
						</li>
					</ul>
				</div>
		    </nav>
		</div>
	</header>

	<main>
		<div class="container">
			<section class="">
				<div class="block-beat block-thumbnail">
					<video>
						<source src="images/beats/piano.mp4" type="video/mp4">
					</video>
					<audio src="images/beats/piano.mp3" controls="true"></audio>
					<p>Author: <a href="https://www.instagram.com/m_ukrainskiy/">skveedi</a></p>
				</div>
				<div class="block-beat block-thumbnail">
					<video>
						<source src="images/beats/deagle.mp4" type="video/mp4">
					</video>
					<audio src="images/beats/deagle.mp3" controls="true"></audio>
					<p>Author: <a href="https://www.instagram.com/m_ukrainskiy/">skveedi</a></p>
				</div>
				<div class="block-beat block-thumbnail">
					<video>
						<source src="images/beats/trap-tape.mp4" type="video/mp4">
					</video>
					<audio src="images/beats/trap-tape.mp3" controls="true"></audio>
					<p>Author: <a href="https://www.instagram.com/m_ukrainskiy/">skveedi</a></p>
				</div>
			</section>
		</div>
	</main>



	<script
	  src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous"></script>
	<script type="text/javascript">
		jQuery.createEventCapturing = (function () {
        var special = jQuery.event.special;
        return function (names) {
            if (!document.addEventListener) {
                return;
            }
            if (typeof names == 'string') {
                names = [names];
            }
            jQuery.each(names, function (i, name) {
                var handler = function (e) {
                    e = jQuery.event.fix(e);

                    return jQuery.event.dispatch.call(this, e);
                };
                special[name] = special[name] || {};
                if (special[name].setup || special[name].teardown) {
                    return;
                }
                jQuery.extend(special[name], {
                    setup: function () {
                        this.addEventListener(name, handler, true);
                    },
                    teardown: function () {
                        this.removeEventListener(name, handler, true);
                    }
                });
            });
        };
    })();
	</script>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/index.js"></script>
</body>
</html>
