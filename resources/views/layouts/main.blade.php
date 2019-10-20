<!DOCTYPE HTML>

<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Verti by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ URL::asset('/css/main.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="#">NextBin</a></h1>
								<!-- <span>by One Habitat</span> -->
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class=""><a href="#">pricing</a></li>
									<li>
										<a href="#">login</a>

									</li>

								</ul>
							</nav>

					</header>
				</div>



        @yield('content')

      </div>

    		<!-- Scripts -->

    			<script src="/js/jquery.min.js"></script>
    			<script src="/js/jquery.dropotron.min.js"></script>
    			<script src="/js/browser.min.js"></script>
    			<script src="/js/breakpoints.min.js"></script>
    			<script src="/js/util.js"></script>
    			<script src="/js/main.js"></script>

    	</body>
    </html>
