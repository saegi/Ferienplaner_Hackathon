<?php 
	session_start();
    if(isset($_SESSION['id'])) unset($_SESSION['id']);
    session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Willkommen</title>
</head>
<body>
	<div class="container">
		<div class="row row-centered">
			<div class="col-md-12">
				<h1>Allegra!</h1>
			</div>
		</div>
		<div class="row row-centered">
			<div class="col-md-12">
				<p>Willkommen beim Ferienplaner, und so gugus blabla</p>
			</div>
		</div>
		<div class="row row-centered">
			<div class="col-md-12">
				<button type="button" class="btn btn-default">Weiter</button>
			</div>
		</div>
	</div>

    <!--jquery-->
	<script src="http://code.jquery.com/jquery-latest.js"></script>

    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- bootstrap.min.js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <!--eigenes css-->
    <link rel="stylesheet" href="css/css.css"stylesheet.css"">
</body>

</html>