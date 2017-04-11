<!doctype html>
<html class="no-js" lang="">
	<head id="head">
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="shortcut icon" href="./favicon.ico" />

		<link rel="stylesheet" type="text/css" href="./dist/css/uikit.365publishing.css" />

		<script src="./vendor/jquery.js"></script>
		<script src="./js/vendor/modernizr-2.8.3.min.js"></script>
		<script src="./dist/js/uikit.js"></script>

		<script type="text/javascript">
			function loadScript(sScriptSrc) {

				var oHead = document.getElementById('head');
				var oScript = document.createElement('script');
				oScript.type = 'text/javascript';
				oScript.src = sScriptSrc;
				oHead.appendChild(oScript);

			}
			loadScript('./js/async.js');
			loadScript('./dist/js/components/datepicker.min.js');
			loadScript('./dist/js/components/accordion.min.js');
			loadScript('./dist/js/components/tooltip.min.js');
		</script>

		<!-- UIKIT Components -->
		<!-- <script src="./dist/js/components/datepicker.min.js"></script>
		<script src="./dist/js/components/accordion.min.js"></script> -->


		<!-- Client side LESS compilation. Replace with a server side for production -->
		<!-- <script src="./js/less.min.js" type="text/javascript"></script> -->
	</head>
	<body>
		<!-- Navbar Start -->
		<nav class="tm-navbar-header uk-navbar uk-navbar-attached">

			<!-- Logo Start -->
			<a class="uk-navbar-brand" href="#">
				<img class="uk-margin uk-margin-remove" src="custom/365publishing/images/logo.png" width="200" title="365publish.com" alt="365publish.com">
			</a>
			<!-- Logo End -->

			<!-- Module Switcher Start -->
			<ul class="uk-navbar-nav">
				<li class="tm-modules-dropdown" data-uk-dropdown="{mode:'click'}">
					<a href>
						<i class="tm-icon-module-4-theme"></i>
						Environmental reporting
						<i class="uk-icon-chevron-down"></i>
					</a>
					<div class="uk-dropdown">
						<ul class="uk-nav uk-nav-dropdown">
							<li>
								<a href>
									<i class="tm-icon-module-1"></i>
									<span class="tm-module-inline-block">Supply chain control</span>
								</a>
							</li>
							<li>
								<a href>
									<i class="tm-icon-module-2"></i>
									<span class="tm-module-inline-block">Portfolio</span>
								</a>
							</li>
							<li>
								<a href>
									<i class="tm-icon-module-3"></i>
									<span class="tm-module-inline-block">Carbon energy management</span>
								</a>
							</li>
							<li>
								<a href>
									<i class="tm-icon-module-4"></i>
									<span class="tm-module-inline-block">Environmental reporting</span>
								</a>
							</li>
							<li>
								<a href>
									<i class="tm-icon-module-5"></i>
									<span class="tm-module-inline-block">Deviation HSE reporting</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
			<!-- Module Switcher End -->

			<!-- Top Subnav Start -->
			<div class="uk-navbar-flip">
				<ul class="uk-navbar-nav">
					<li>
						<a id="welcome-page" href="welcome_page.html">
							<i class="uk-icon-cubes"></i>
							Welcome page
						</a>
					</li>
					<li>
						<a id="login-page" href="login.html">
							<i class="uk-icon-sign-in"></i>
							Login
						</a>
					</li>
					<li>
						<a href="help_desk.html">
							<i class="uk-icon-comment-o"></i>
							Help desk
						</a>
					</li>
					<li>
						<a href>
							<i class="uk-icon-user"></i>
							Consulting
						</a>
					</li>
					<li data-uk-dropdown="{mode:'click'}">
						<a href>
							<i class="uk-icon-gear"></i>
							Settings
							<i class="uk-icon-chevron-down"></i>
						</a>
						<div class="uk-dropdown">
							<ul class="uk-nav uk-nav-dropdown">
								<li>
									<a href>
										<i class="uk-icon-home"></i>
										Home
									</a>
								</li>
								<li>
									<a href>
										<i class="uk-icon-list"></i>
										List
									</a>
								</li>
								<li>
									<a href>
										<i class="uk-icon-lightbulb-o"></i>
										Bulb
									</a>
								</li>
								<li>
									<a href>
										<i class="uk-icon-line-chart"></i>
										Chart
									</a>
								</li>
								<li>
									<a href>
										<i class="uk-icon-download"></i>
										Download
									</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<!-- Top Subnav End -->

		</nav>
		<!-- Navbar End -->


		<!-- Tabs Start -->
		<ul class="uk-tab" id="primary-nav" data-uk-tab>
			<li data-uk-dropdown="{mode:'click'}">
				<a href>Hei Roger Berg</a>
				<div class="uk-dropdown">
		            <ul class="uk-nav uk-nav-dropdown">
		                <li class="uk-active"><a href="pressrelease_list.html">Overview common</a></li>
		                <li><a href="pressrelease_template_select.html">Overview compact</a></li>
		                <li><a href="pressrelease_step_1.html">Accordion</a></li>
		            </ul>
		        </div>
			</li>
			<li data-uk-dropdown="{mode:'click'}">
				<a href>Forsiden</a>
				<div class="uk-dropdown">
		            <ul class="uk-nav uk-nav-dropdown">
		                <li><a href="overview_common.html">Overview common</a></li>
		                <li><a href="overview_compact.html">Overview compact</a></li>
		                <li><a href="accordion.html">Accordion</a></li>
		            </ul>
		        </div>
			</li>
			<li data-uk-dropdown="{mode:'click'}">
				<a href>PR skolen</a>
				<div class="uk-dropdown">
		            <ul class="uk-nav uk-nav-dropdown">
		                <li><a href="form_common.html">Form common</a></li>
		                <li><a href="form_example.html">Form example</a></li>
		                <li><a href="form_adduser.html">Form add user</a></li>
		                <li><a href="form_addunit.html">Form add unit</a></li>
		                <li><a href="form_addperson.html">Form add person</a></li>
		            </ul>
		        </div>
			</li>
			<li data-uk-dropdown="{mode:'click'}">
				<a href>Produkter</a>
				<div class="uk-dropdown">
		            <ul class="uk-nav uk-nav-dropdown">
		                <li><a href="dataentry_monthly.html">Data entry monthly</a></li>
		                <li><a href="dataentry_quarter.html">Data entry quarter</a></li>
		                <li><a href="dataentry_halfyear.html">Data entry half year</a></li>
		                <li><a href="dataentry_yearly.html">Data entry yearly</a></li>
		            </ul>
		        </div>
			</li>
			<li data-uk-dropdown="{mode:'click'}">
				<a href>Referanser</a>
				<div class="uk-dropdown">
		            <ul class="uk-nav uk-nav-dropdown">
		                <li class="uk-active"><a href="report_scrolled.html">Report with scroll</a></li>
		            </ul>
		        </div>
			</li>
			<li>
				<a href>Min Side</a>
			</li>
		</ul>
		<!-- Tabs End -->


		<!-- Toolbar Start -->
		<nav class="uk-navbar tm-toolbar">
			<ul class="uk-navbar-nav">
				<li class="uk-active" data-uk-dropdown="{mode:'click'}">
					<a href>
						<i class="uk-icon-edit"></i>
						Pressemelding
						<i class="uk-icon-chevron-down"></i>
					</a>
					<div class="uk-dropdown">...</div>
				</li>
				<li data-uk-dropdown="{mode:'click'}">
					<a href>
						<i class="uk-icon-edit"></i>
						Nyhetsmelding
						<i class="uk-icon-chevron-down"></i>
					</a>
					<div class="uk-dropdown">
						<ul class="uk-nav uk-nav-dropdown">
							<li>
								<a href>
									<i class="uk-icon-home"></i>
									Home
								</a>
							</li>
							<li>
								<a href>
									<i class="uk-icon-list"></i>
									List
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li data-uk-dropdown="{mode:'click'}">
					<a href>
						<i class="uk-icon-at"></i>
						Kontakter
						<i class="uk-icon-chevron-down"></i>
					</a>
					<div class="uk-dropdown">...</div>
				</li>
				<li data-uk-dropdown="{mode:'click'}">
					<a href>
						<i class="uk-icon-edit"></i>
						Grupper
						<i class="uk-icon-chevron-down"></i>
					</a>
					<div class="uk-dropdown">...</div>
				</li>
				<li data-uk-dropdown="{mode:'click'}">
					<a href>
						<i class="uk-icon-home"></i>
						Konto
						<i class="uk-icon-chevron-down"></i>
					</a>
					<div class="uk-dropdown">...</div>
				</li>
				<li>
					<a href>
						<i class="uk-icon-building"></i>
						Webside
					</a>
				</li>
				<li>
					<a href>
						<i class="uk-icon-question-circle"></i>
						Hjelp
					</a>
				</li>
			</ul>
		</nav>
		<!-- Toolbar End -->



		<!-- Content Start -->
		<div class="tm-middle" id="primary-content">

		</div>
		<!-- Content End -->
		<footer class="footer">
			<div class="uk-container uk-container-center">
				<div class="uk-flex uk-flex-space-between">
					<div class="uk-width-1-5">
						<h3>365 Direkte</h3>
						<ul class="menu uk-list">
							<li><a href="#">Om oss</a></li>
						</ul>
					</div>
					<div class="uk-width-1-5">
						<h3>For publisher</h3>
						<ul class="menu uk-list">
							<li><a href="#">Legg til pressemeldinger</a></li>
						</ul>
					</div>
					<div class="uk-width-1-5">
						<h3>Pressemeldinger</h3>
						<ul class="menu  uk-list">
							<li><a href="#">Alle</a></li>
							<li><a href="#">Sist uke</a></li>
							<li><a href="#">Siste måned</a></li>
							<li><a href="#">Siste året</a></li>
						</ul>
					</div>
					<div class="uk-width-1-5">
						<h3>Media</h3>
						<ul class="menu uk-list">
							<li><a href="#">Populære</a></li>
							<li><a href="#">Kanaler</a></li>
						</ul>
					</div>
					<div class="uk-width-1-5">
						<div class="uk-margin-bottom">
							<img src="custom/365publishing/images/footer-logo.png" width="218" title="365publish.com" alt="365publish.com">
						</div>
						<div class="custom uk-margin-bottom">
							<p>365publish.com er Norges største portal for PR innhold og virksomhetsrelaterte nyheter. </p>
						</div>
					</div>
				</div>
			</div>
		</footer>


		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<!-- Content Start -->

		<!-- Content End -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
		<script src="./js/plugins.js"></script>
		<script src="./js/main.js"></script>

		<!-- Google Analytics -->
		<script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='https://www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			ga('create','UA-64603349-1','auto');ga('send','pageview');
		</script>
	</body>
</html>
