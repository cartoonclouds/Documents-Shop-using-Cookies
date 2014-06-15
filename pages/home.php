	<div class="jumbotron">
		<h1>A Great Documents Website</h1>
		<p class="lead">Find your favourite documents and buy them!</p>
		<p><a class="btn btn-lg btn-success" href="index.php?page=list" role="button">Documents List</a></p>
	</div>

	<ol class="breadcrumb">
	  <li class="active"><a href="index.php">Home Page</a></li>
	</ol>
      

<?php

	include_once("config.php");
		print("<div class=\"row\">");
	if( isset($_COOKIE["read"]) ) {
	
		$array = unserialize($_COOKIE['read']);		
		print("<div class=\"col-md-6\">");
		print("<h4>Documents you have viewed</h4>");

		// Iterate array
		foreach ($array as $i) {
			$id = $array[$i];
				
			$result = mysqli_query($con, "SELECT id, title FROM docs WHERE id = " . $i . "");
			while($row = mysqli_fetch_array($result)){
		    	print "<p>Title: ".$row['title']."</p>";
			}
		}
		print("</div>");
	}
	else {
		print("<div class=\"col-md-6\">");
		print("<h4>You haven't viewed any documents yet.</h4>");
		print("</div>");
	}



	$bought = $_GET['bought'];
	if (!is_null($bought)) {

		print("<div class=\"col-md-6\">");
		print("<div class=\"alert alert-success\">");
		$result2 = mysqli_query($con, "SELECT id, title FROM docs WHERE id = " . $bought . "");
		while($row2 = mysqli_fetch_array($result2)){
			print("<h4>You have just bought</h4>");
	    	print "<p>Title: ".$row2['title']."</p>";
			print("<p>The full document will be sent to you shortly.</p>");
		}
		print("</div>");
		print("</div>");
	}
		print("</div>");
?>