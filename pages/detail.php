	<?php
		include_once("config.php");
		
		$id = $_GET['id'];
		
		// Check if cookie exists
		if( isset($_COOKIE["read"]) ) {
			$array = unserialize($_COOKIE['read']);
			
			// Iterate array
			$found = False;
			if (in_array($id, $array)) {
				// Check if doc id already in cookie
					$found = True;
			}
			if (!$found) {
				array_push($array, $id);
				setcookie("read", serialize($array), time()+3600);
			}
		}
		
		// If cookie does NOT exists
		else {
			$array = array();
			array_push($array, $id);
			setcookie("read", serialize($array), time()+3600);
		}
		    			
		$result = mysqli_query($con, "SELECT * FROM docs WHERE id = " . $id . "");
		while($row = mysqli_fetch_array($result)){ ?>
		
			<ol class="breadcrumb">
			  <li><a href="index.php">Home Page</a></li>
			  <li><a href="index.php?page=list">Documents</a></li>
			  <li class="active"><?php echo $row['title']; ?></li>
			</ol>
			
			<?php
		
	    	print "<h1>Document ".$row['id'].": ".$row['title']."</h1>";
	    	print "<h2>Info</h2>";
	    	print "<p>Document ".$row['info']."</p>";
	    		
		}
	?>

	<div class="text-right"><a href="index.php?page=list" class="btn btn-info"><span class="glyphicon glyphicon-th-list"></span> No Thanks</a></div>
	
	<?php
	   $email = $emailErr = "";

	   // If the user submitted the form.
	   if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   	   
	   	   // PHP validation. If the email field is empty.	   
		   if (empty($_POST["email"])) {
		     $emailErr = "<div class=\"alert alert-info\">The Email address field is required.</div>";
		   }
		   
		   // PHP vaildation. If the email field is not empty, make sure that it's a valid email address for precaution.
		   else {
			   $email = $_POST["email"];

			   if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
    
					// Insert into the DB 
					include_once("config.php");
						
					mysqli_query($con,"INSERT INTO purchases (email, docId) VALUES ('".$email."', '".$id."')");
					    
					// Clear the cookie
					setcookie("read", "", time()-3600);
					    
					// Success 	
					header('Location: index.php?bought='.$id);
		
				}
				
				else {
					$emailErr = "<div class=\"alert alert-info\">The Email Address you entered does not appear to be valid.</div>";
				}

		   }
		   
		}
    ?>
	
	
	<div class="row marketing">	
	
		<?php 
			// If any errors during PHP Validation. (apart from ajax validation)
			echo $emailErr;
		?>
	
		<form id="purchaseForm" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?page=detail&id=<?=$id?>" method="post">
			<div class="col-md-9">
				<div class="form-group">
					<label for="email" class="col-sm-3 control-label text-left">Email Address:</label>
					<div class="col-sm-9">
						<input type="email" class="form-control" id="email" name="email" placeholder="Your Email Address">
						<input type="hidden" name="id" value="<?php echo $id; ?>">
					</div>
				</div>
			</div>
		
			<div class="col-md-3">
				<div class="form-group">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-success" style="display: block; width: 100%;">Buy</button>
					</div>
				</div>
			</div>
		</form>
		
	</div>
	