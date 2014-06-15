<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Document Shop">
    <meta name="author" content="Emmanouil Konstantinidis">

    <title>Documents Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="alert alert-info cookiesnotice">
        <a href="#" class="close" data-dismiss="alert">×</a>
        <small>This site uses cookies. By continuing to browse the site you are agreeing to our use of cookies.</small>
    </div>


    <div class="container">
      <div class="header">
        <h3 class="text-muted">Documents Shop</h3>
      </div>


	<?php
		// Getting the page name. If 'page' is empty then include the home page.
		// Pages are stored inside the folder 'pages'.
		
		$url = '';
		$url .= 'pages/';
		
		if (!empty($_GET['page'])) {
			$url .= $_GET['page']. '.php';
		}
		else {
				$url = 'pages/home.php';
		}
		include $url;
	?>

      <div class="footer">
        	<p>&copy; The Documents Shop 2014</p>
        	<p>Developed by <a href="mailto:ekonstantinidis@outlook.com">Emmanouil Konstantinidis</a>.</p>
      </div>

    </div> <!-- /container -->
   
	<!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- jQuery Validate JS -->
    <script src="js/jquery.validate.min.js"></script>        

    <!-- jQuery Cookie JS -->
    <script src="js/jquery.cookie.js"></script>        
    
    <script type="text/javascript">
        jQuery(function( $ ){

	        // Check if alert has been closed
	        if( $.cookie('cookies-alert') === 'closed' ){
	            $('.cookiesnotice').hide();
	        }
	        
	        // Grab your button (based on your posted html)
	        $('.close').click(function( e ){
	            // Do not perform default action when button is clicked
	            e.preventDefault();
	            /* If you just want the cookie for a session don't provide an expires
	             Set the path as root, so the cookie will be valid across the whole site */
	            $.cookie('cookies-alert', 'closed', { path: '/' });
	        });        
        
        });
        
    </script>
    
    <!-- If its the detail page, then include the js validate lib. -->
    <?php $page = $_GET['page']; if ($page == "detail") { ?>
    	
	<script type="text/javascript">
		$(document).ready(function () {
	
		    // Ajax Validaton of the purchase form	
		    $('#purchaseForm').validate({
		        rules: {
		            email: {
		            	minlength: 8,
		                required: true,
		                email: true
		            }
		        },
				messages: {
					email: {
					  required: "Have you filled in your email?",
					  email: "Your email address must be in the format of name@domain.com."
					}
				},
		        highlight: function (element) {
		            $(element).closest('.form-group').removeClass('success').addClass('has-error');
		        },
		        success: function (element) {
		            element.addClass('valid')
		                .closest('.form-group').removeClass('has-error').addClass('has-success');
		        }
		    });
		});
	</script>
		
	<?php } ?>
    
  </body>
</html>
