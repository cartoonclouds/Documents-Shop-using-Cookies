	<div class="jumbotron">
		<h1>Documents</h1>
		<p class="lead">Find your favourite documents and buy them!</p>
	</div>

	<ol class="breadcrumb">
	  <li><a href="index.php">Home Page</a></li>
	  <li class="active">Documents List</li>
	</ol>
      

	<table class="table table-hover">
	<thead>
		<tr>
			<td>Id</td>
			<td>Title</td>
			<td>More</td>
		</tr>
	</thead>
	<tbody>
	<?php
		include_once("config.php");
	
		$result = mysqli_query($con, "SELECT * FROM docs ORDER BY id ASC");
	
		while($row = mysqli_fetch_array($result)){
			$id = $row['id'];
					
			if( isset($_COOKIE["read"]) ) {
				$array = unserialize($_COOKIE['read']);
					// Iterate array
					if (in_array($id, $array)) {
							$read = True;
					}
					else {
						$read = False;
					}
			}
			else {
				$read = False;
			}
		
	    	print "<tr><td>".$row['id']."</td><td><b>".$row['title'];
	    	if ($read == True) {
	    		print("*");
	    	}
	       	print "</td><td><a href=\"index.php?page=detail&id=".$row['id']."\">More Info</a></td></tr>";
	
		}
		
		mysql_close(); 
	?>
	</tbody>
	</table>


	<div class="row marketing text-right"><a href="index.php" class="btn btn-info"><span class="glyphicon glyphicon-home"></span> Return To The Home Page</a></div>
