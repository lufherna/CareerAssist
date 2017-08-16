<!DOCTYPE HTML>

<html>
	<head>
		<title>CareerPath</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!-- Scripts -->
		<script src= "{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src= "{{ asset('assets/js/skel.min.js') }}"></script>
		<script src= "{{ asset('assets/js/util.js') }}"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src= "{{ asset('assets/js/main.js') }}"></script>
		<!-- below is the code for RIOT.js -->
		<script src="https://cdn.jsdelivr.net/npm/riot@3.6/riot+compiler.min.js"></script>

	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index" class="logo"><strong>CareerPath</strong></a>
									<!-- this code below are for the twitter, fb, SC and IG icons. which aren't necessary for now -->
									<!-- <ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul> -->

									<!-- Right Side Of Navbar -->
			                        <ul class="nav navbar-nav navbar-right" id = 'logoutButton'>
			                            <!-- Authentication Links -->
			                            @if (Auth::guest())
			                                <li><a href="{{ route('login') }}">Login</a></li>
			                                <li><a href="{{ route('register') }}">Register</a></li>
			                            @else
			                                <!-- <a href="#" aria-expanded="false">
			                                    {{ Auth::user()->name }} <span class="caret"></span>
			                                </a> -->
			                                <!-- code above removes name near the logout button -->
			                                <a href="{{ route('logout') }}"
			                                   onclick="event.preventDefault();
			                                                     document.getElementById('logout-form').submit();">
			                                    Logout
			                                </a>

			                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			                                    {{ csrf_field() }}
			                                </form>
			                            @endif
			                        </ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Welcome {{ Auth::user()->name }}<br />
											</h1>
										</header>
										<p>This site was built with your future career in mind. It was made for the purpose of assisting those who either want a career change, who need guidance as to which career to choose from and the casual browser. We have plenty of useful articles and resources, so please feel free to look around!</p>
										<ul class="actions">
											<li><a href="#" class="button big">Learn More</a></li>
										</ul>
									</div>
									<span class="image object">
										<img src="images/discussing.jpg" alt="discussingCareers" />
									</span>
								</section>

							<!-- Section -->
							<!-- 	<section>
								<header class="major">
									<h2>Random Stuff Below</h2>
								</header>
								<div class="features">
									<article>
										<span class="icon fa-diamond"></span>
										<div class="content">
											<h3>Portitor ullamcorper</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
										</div>
									</article>
									<article>
										<span class="icon fa-paper-plane"></span>
										<div class="content">
											<h3>Sapien veroeros</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
										</div>
									</article>
									<article>
										<span class="icon fa-rocket"></span>
										<div class="content">
											<h3>Quam lorem ipsum</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
										</div>
									</article>
									<article>
										<span class="icon fa-signal"></span>
										<div class="content">
											<h3>Sed magna finibus</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
										</div>
									</article>
								</div>
							</section> -->

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Popular Articles</h2>
									</header>
									<div class="posts">
										<article>
											<a href="{{ route('webdeveloper') }}" class="image"><img src="images/html.jpg" alt="" /></a>
											<h3>Web Developer? What?</h3>
											<h4>Information Technology</h4>
											<p>In this short, yet informative article, we go in explaining what is a Web Developer, what they do and how this career will be around for a long time.</p>
											<ul class="actions">
												<li><a href="{{ route('webdeveloper') }}" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
											<h3>Nulla amet dolore</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
											<h3>Tempus ullamcorper</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
											<h3>Sed etiam facilis</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<!-- <article>
											<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
											<h3>Feugiat lorem aenean</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
											<h3>Amet varius aliquam</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article> -->
									</div>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="/index">Homepage</a></li>
										<li><a href="/generic">Schools</a></li>
										<li><a href="/elements">Steps</a></li>
										<li>
											<span class="opener">Career Favorites</span>
											<ul>
												<li><a href="#">Favorite Career 1</a></li>
												<li><a href="#">Favorite Career 2</a></li>
												<li><a href="#">Favorite Career 3</a></li>
												<li><a href="#">Favorite Career 4</a></li>
											</ul>
										</li>
										<li>
											<span class = 'opener'> Subjects</span>
											<ul>
												<li><a href = '#'>Information Technology</a></li>
												<li><a href = '#'>Criminal Justice</a></li>
												<li><a href = '#'>Medical</a></li>
											</ul>
										</li>
										<li><a href="#">Technology</a></li>
									<!-- 	<li>
										<span class="opener">Another Submenu</span>
										<ul>
											<li><a href="#">Lorem Dolor</a></li>
											<li><a href="#">Ipsum Adipiscing</a></li>
											<li><a href="#">Tempus Magna</a></li>
											<li><a href="#">Feugiat Veroeros</a></li>
										</ul>
									</li>
									<li><a href="#">Maximus Erat</a></li>
									<li><a href="#">Sapien Mauris</a></li>
									<li><a href="#">Amet Lacinia</a></li> -->
									</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Favorite Articles</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section>

							<!-- Section -->
								<!-- <section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">information@untitled.tld</a></li>
										<li class="fa-phone">(000) 000-0000</li>
										<li class="fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section> -->

							<!-- Footer -->
								<!-- <footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer> -->

						</div>
					</div>

			</div>

		
	</body>
</html>