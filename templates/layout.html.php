<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../assets/main.css">
        <title><?=$title?></title>
    </head>
    <body>
	<div id="wrapper">
		<header id="header">
			<a href="index.html" class="logo">SHIT</a>
			<span> <h1>coffee shit</h1> </span>
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>
		<nav id="menu">
			<ul class="links">
			    <li><a href="index.php">Home</a></li>
			    <li><a href="addcoffee.php">Add</a></li>
			    <li><a href="browse.php">Browse</a></li>
			    <li><a href="stats.php">Graphs and shit</a></li>
			</ul>
			<ul class="actions stacked">
				<li><a href="#" class="button primary fit">Get Started</a></li>
				<li><a href="#" class="button fit">Log In</a></li>
			</ul>
		</nav>

		<main>
			<div class="inner">
				<?=$output?>
			</div>
		</main>

		<footer>
		    &copy; date       
		</footer>
	</div>
	<!-- Scripts -->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/jquery.scrolly.min.js"></script>
	<script src="../assets/js/jquery.scrollex.min.js"></script>
	<script src="../assets/js/browser.min.js"></script>
	<script src="../assets/js/breakpoints.min.js"></script>
	<script src="../assets/js/util.js"></script>
	<script src="../assets/js/main.js"></script>
    </body>
</html>
