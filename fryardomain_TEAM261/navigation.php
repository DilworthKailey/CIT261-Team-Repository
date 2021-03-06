<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
	<title>Navigation Bar Demonstration</title>
	<link rel="stylesheet" type="text/css" href="/media/style.css" media="screen">	
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
	</script>
    </head>
    <body>
        <header>
	<div class="banner">
		<h1>Welcome!</h1>
	</div>
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="#">Practice</a>
		<a href="#">Calendar</a>
		<p>Resources</p>
		<a href="#">  Tuning</a>
		<a href="#">  Rhythms</a>
		<a href="#">  Duets</a>
		<a href="#">  Charts</a>
		<a href="#">  Videos</a>
	
	</div>
	<span id="icon" onclick="openNav()">&#9776;</span>
        </header>
    </body>
</html>
