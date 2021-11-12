<!--header-->
<header id="site-header">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark stroke p-0">
			<h1> <a class="navbar-brand" href="index.html">
					Publication
				</a></h1>
			<!-- if logo is image enable this   
			<a class="navbar-brand" href="#index.html">
					<img src="/image-path" alt="Your logo" title="Your logo" style="height:35px;" />
			</a> -->
			<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
				aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
				<span class="navbar-toggler-icon fa icon-close fa-times"></span>
				</span>
			</button>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item @@about-active">
						<a class="nav-link" href="about.html">About</a>
					</li>
					<li class="nav-item @@contact-active">
						<a class="nav-link" href="contact.html">Contact</a>
					</li>
				</ul>
				<!--/search-right-->
				<div class="search-right">
					<a href="#search" class="btn btn-light theme-button mr-lg-3 mt-lg-0 mt-4" title="search"><span class="fa fa-search"
							aria-hidden="true"></span> Topics</a>
					<!-- search popup -->
					<div id="search" class="pop-overlay">
						<div class="popup">
							<form action="#search-results.html" method="post" class="search-box">
								<input type="search" placeholder="Search your Keyword" name="search" required="required" autofocus="">
								<button type="submit" class="btn"><span class="fa fa-search" aria-hidden="true"></span></button>
							</form>
							<div class="browse-items">
								<h3 class="hny-title two mt-md-5 mt-4">Browse all topics:</h3>
								<ul class="search-items">
									<li><a href="#blog.html">Design Patterns</a></li>
									<li><a href="#blog.html">Performance</a></li>
									<li><a href="#blog.html">Photoshop</a></li>
									<li><a href="#blog.html">User Experience</a></li>
									<li><a href="#blog.html">Typography</a></li>
									<li><a href="#blog.html">E-commerce</a></li>
									<li><a href="#blog.html">HTML</a></li>
									<li><a href="#blog.html">Illustration</a></li>
									<li><a href="#blog.html">Design Patterns</a></li>
									<li><a href="#blog.html">Performance</a></li>
									<li><a href="#blog.html">Photoshop</a></li>
									<li><a href="#blog.html">User Experience</a></li>
									<li><a href="#blog.html">Typography</a></li>
									<li><a href="#blog.html">E-commerce</a></li>
									<li><a href="#blog.html">HTML</a></li>
									<li><a href="#blog.html">Illustration</a></li>
								</ul>
							</div>
						</div>
						<a class="close" href="#close">×</a>
					</div>
					<!-- /search popup -->
					<a href="#domain" class="domain" data-toggle="modal" data-target="#DomainModal">
						<div class="hamburger1">
							<div></div>
							<div></div>
							<div></div>
						</div>
					</a>

					<!--//search-right-->
				</div>
			</div>

			<!-- toggle switch for light and dark theme -->
			<div class="mobile-position">
				<nav class="navigation">
					<div class="theme-switch-wrapper">
						<label class="theme-switch" for="checkbox">
							<input type="checkbox" id="checkbox">
							<div class="mode-container">
								<i class="gg-sun"></i>
								<i class="gg-moon"></i>
							</div>
						</label>
					</div>
				</nav>
			</div>
			<!-- //toggle switch for light and dark theme -->
		</nav>
	</div>
</header>
<!--/header-->
