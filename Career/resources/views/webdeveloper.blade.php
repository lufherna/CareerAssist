<!DOCTYPE HTML>
	<html>
			<head>
				<meta charset="utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
				<!-- <[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
				<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
				<!-- [if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif] -->
				<!-- [if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif] -->
				<!-- <Scripts-->
				<script src= "{{ asset('assets/js/jquery.min.js') }}"></script>
				<script src= "{{ asset('assets/js/skel.min.js') }}"></script>
				<script src= "{{ asset('assets/js/util.js') }}"></script>
				<!-- 	[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif] -->
				<script src = "{{ asset('assets/js/main.js') }}"></script>
				<!-- this code below is for the charts being used in this page -->
				<!-- <script src = "{{ asset('assets/js/charts.js') }}"></script> -->
				<script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
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
												<h1>Starter's Guide To: Web Development</h1>
										</header>

										<span class="image main"> <img src="images/html.jpg" alt="web Development" /></span>

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
									 			<p>A front-end developer takes care of what users see and how the websites feel. They make sure that the website is appealing to the eyes, easy to navigate through and serves the client's purposes. A bit of UX/UI (to learn more about UX/UI design, click here) experience is a plus when designing great looking sites, but it isn't required.</p>
									 			<p>A back-end web developer is responsible for server-side web application logic and integration of the work front-end web developers do. Back-end developers usually write web services and APIs used by front-end developers and mobile application developers. Sometimes this means that their responsiblity would be to work on the features that aren't readily seen by everyone. Some would agree with me that back-end developers have the higher of the salaries when compared to front-end developers. Hope the front-end guys don't beat me up.</p>
									 			<p> Then, last but not least we have full-stack web developers. These developers aren’t experts at everything; they simply have a functional knowledge and ability to take a concept and turn it into a finished product. Such experts make building apps much easier as they understand how everything works from top to bottom and can anticipate problems accordingly. It takes a good amount of work experience in different languages, roles, and industries to reach this level of qualification. Because of this, full stack developers are few and far between, making those who exist very employable and in-demand. Now let's talk about what training options are available.
									 			</p>
												
											<hr class="major" />

											<h3>Training Options</h3>
											<p>So now you know what kind of developers exist and what the roles are, awesome! Now let's talk about how to get there. The two most common ways are:</p>
											<ul>
												<li>Coding Bootcamps</li>
												<li>Self-Study</li>
											</ul>
											<p>Both of these paths have their own pros and cons. Another factor to take in consideration is cost but we'll show you a chart with all that data later on. Depending on what is your learning style one way will work better than another, but that is completely up to you and your preference. Let us begin by talking about the Coding Bootcamp Programs</p>
											<p>Coding Bootcamps are an amazing source of instruction and support. You have an instructor, teacher assistants and other resources to help you grasp the programming concepts. Depending on where you live there are several options available. Below are some of the pros of choosing a coding bootcamp: 
												<ul>
													<li><strong>Bootcamps provide an end-to-end organized structure.</strong> The content some online learning programs offer is becoming more and more extensive and organized, but there still isn't a comprehensive learning plan. Bootcamps, on the other hand, would have developed their curriculum with one thing in mind: starting your career off as a web developer.</li>
													<li><strong>You readily have access to industry experts.</strong> Even the brightest people get stuck at some point and the exact moment in which they get stuck differs greatly. Having someone nearby to help you right away is invaluable. You'll have an instructor and possibly teacher assistants to provide you the help you need. Some coding programs also offer free tutoring! So take advantage of the resources available to you.</li>
													<li><strong>You are surrounded by like-minded people.</strong> If you plan on simply attending lectures, working on projects by yourself and only interacting with your peers when you are forced to, perhaps bootcamps are not for you. Interacting with your peers will not only keep your interest and commitment to learning high, it will also help you a lot with actual course content. In my experience you're surrounded by very intelligent people, they are also learning but they don't mind sharing their knowledge with you. It's an awesome resource to have and it keeps you motivated.</li>
													<li><strong>You get alumni support.</strong> Bootcamps usually have great relationships with technology companies in the area they are located in. Also, Your success helps their business. There is a natural alignment of interest. Some bootcamps don't guarantee a job after you finish, but they will at least be able to provide you with administrative support post-graduation.</li>
												</ul> 

											<canvas id="myChart" width="400px" height="150px"></canvas>
											<script src = "{{ asset('assets/js/charts.js') }}"></script>

											<hr class="major" />

											<h2>Magna etiam veroeros</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel sed vehicula.</p>
											<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p>

										</section>

								</div>
							</div>

					</div>

				<!-- Scripts -->
					<!-- <script src="assets/js/jquery.min.js"></script> -->
					<!-- <script src="assets/js/skel.min.js"></script>
					<script src="assets/js/util.js"></script>
					<script src="assets/js/main.js"></script> -->

			</body>
	</html>
