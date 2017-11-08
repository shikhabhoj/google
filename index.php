<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="resources/css/home.css">
<title>Shikha Bhoj's Google</title>
<script type="text/javascript">
	function search() {
		var searchValue = document.getElementsByName('search')[0].value 
		searchValue = "https://www.google.co.in/search?q=" + searchValue
		//console.log(searchValue)	
		window.location.href = searchValue;
	};
	
</script>
</head>
<body>
<?php
include 'header.php';
?>
<img src="resources/images/google.png" alt="google" style="margin-top: 150px"><br>
<div id="voice-search">
	<input type="text" placeholder="Aman Bhoj pagal hai.." name="search" onKeyDown="if(event.keyCode==13) search();">
	<a href="https://fb.com"><img src="resources/images/mike.png" width=25 /></a>
</div>
<br><br>
<button onclick="search()">Google Search</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://www.google.com/doodles"><button>I'm Feeling Lucky</button></a><br><br>
<a href="www.google.com">Meet the artist who photographed the world without leaving home</a><br><br>
<p>Google.co.in offered in:
	<a href="www.google.com">Hindi</a>&nbsp;
	<a href="www.google.com">Marathi</a>&nbsp;
	<a href="www.google.com">Babita Bhoj</a>&nbsp;
</p>
<?php
include("footer.php");
?>
</body>
<html>