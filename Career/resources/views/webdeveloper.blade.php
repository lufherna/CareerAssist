<!DOCTYPE HTML>
		<html>
			<head>
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

									<!-- Content -->
										<section>
											<header class="main">
												<h1>Guide To: Web Development</h1>
											</header>

											<span class="image main"><img src="images/html.jpg" alt="" /></span>

												<h3>Intro</h3>
												<p>In this article I'll go on explaining what is a web developer, what they do, simple tools that they use and the options that are available to become one. I'll try to keep it simple and not bore you to death with all the details, just enough to inform you of the options available to learn about the trade and to get you started.</p>
												
												<h3>So.....what is a Web Developer?</h3>
												<p>Imagine going on your favorite website, you know, the one with all the cool features, pretty pictures and nice layouts. Have you ever asked yourself how it works? Why does it look like that? Or, my favorite, "I wish I can change that feature or color". That site you're thinking of looks and functions because a person or a team of people got together, formed an idea and used different programming languages in order to create it. They coordinated who was going to work on the aesthetics and who was going to work on the features that work behind the scenes.</p>
												<p>There are three kinds of web developers:</p>
												<ul>
													<li>Front-End</li>
													<li>Back-End</li>
									 				<li>Full-Stack</li>
									 			</ul> 
									 			<p>A front-end developer takes care of what users see and how the websites feel. They make sure that the website is appealing to the eyes, easy to navigate through and serves the client's purposes. A bit of UX/UI experience is a plus when designing great looking sites, but it isn't required.</p>
									 			<p>The back-end developer would take care of the website's functionality. Sometimes this means that their responsiblity would be to work on the features that aren't readily seen by everyone. Then, last but not least we have full-stack web developers. These developers have a working knowledge of both front-end and back-end technologies and can work on either roles. This kind of work takes up more training but is great because you have a broader knowledge of the field.</p>
												
											<hr class="major" />

											<h2>Interdum sed dapibus</h2>
											<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel sed vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p>

											<hr class="major" />

											<h2>Magna etiam veroeros</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel sed vehicula.</p>
											<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p>

										</section>

								</div>
							</div>

						<!-- Sidebar -->
						<sidebar></sidebar>
						<!-- below is the code for RIOT.js -->
						<script type="riot/tag" src="{{ asset('views/sidebar.tag.html') }}"></script>
						<!-- include riot.js -->
						<script src="{{ https://cdn.jsdelivr.net/npm/riot@3.6/riot+compiler.min.js }}"></script>
						<!-- mount the tag -->
						<script>riot.mount('*')</script>

					</div>

				<!-- Scripts -->
					<!-- <script src="assets/js/jquery.min.js"></script> -->
					<!-- <script src="assets/js/skel.min.js"></script>
					<script src="assets/js/util.js"></script>
					<script src="assets/js/main.js"></script> -->

			</body>
		</html>
