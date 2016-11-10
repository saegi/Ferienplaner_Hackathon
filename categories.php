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
				<!--Fortschrittsleiste-->
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
				</div>
			</div>
		</div>
		<div class="row row-centered">
			<div class="col-md-12">
				<h1>Auf was für eine Aktivität haben sie Lust</h1>
			</div>
		</div>
		<div class="row row-centered">
			<div class="col-md-12">
				<label>
				  <input type="checkbox" value="1" name="natur">
				  <b>Natur</b>
				</label>
				<label>
				  <input type="checkbox" value="2" name="sport">
				  <b>Sport</b>
				</label>
				<label>
				  <input type="checkbox" value="3" name="Wellness">
				  <b>Wellness</b>
				</label>
				<label>
					<input type="checkbox" value="3" name="Kultur">
					<b>Kultur</b>
				</label>
				<label>
					<input type="checkbox" value="3" name="Unterhaltung">
					<b>Unterhaltung</b>
				</label>
			 </div>
		</div>
		<div class="row row-centered">
			<div class="col-md-4">
				<button type="button" class="btn btn-default">Zurück</button>
			</div>
			<div class="col-md-4">
				<button type="button" class="btn btn-default">Home</button>
			</div>
			<div class="col-md-4">
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
