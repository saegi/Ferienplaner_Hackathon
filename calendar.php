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
				<h1>An welchen Wochentagen soll die Aktivität stattfinden?</h1>
			</div>
		</div>
	</div>
	<div class="row row-centered">
	 <div class="col-md-12">
		<label class="Form-label--tick">
			  <input type="checkbox" value="1" name="SomeCheckbox" class="Form-label-checkbox">
			  <span class="Form-label-text">Mo</span>
			</label>
			<label class="Form-label--tick">
			  <input type="checkbox" value="2" name="SomeCheckbox" class="Form-label-checkbox">
			  <span class="Form-label-text">Di</span>
			</label>
			<label class="Form-label--tick">
			  <input type="checkbox" value="3" name="SomeCheckbox" class="Form-label-checkbox">
			  <span class="Form-label-text">Mi</span>
			</label>
			<label class="Form-label--tick">
				<input type="checkbox" value="4" name="SomeCheckbox" class="Form-label-checkbox">
				<span class="Form-label-text">Do</span>
			</label>
			<label class="Form-label--tick">
				<input type="checkbox" value="5" name="SomeCheckbox" class="Form-label-checkbox">
				<span class="Form-label-text">Fr</span>
			</label>
			<label class="Form-label--tick">
				<input type="checkbox" value="6" name="SomeCheckbox" class="Form-label-checkbox">
				<span class="Form-label-text">Sa</span>
			</label>
			<label class="Form-label--tick">
				<input type="checkbox" value="7" name="SomeCheckbox" class="Form-label-checkbox">
				<span class="Form-label-text">So</span>
			</label>
		</div>
	</div>

		<div class="container">
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

		<!-- Wochentagebuttons-->
		<link rel="stylesheet" href="dist/check-radio.css">
		<link rel="stylesheet" href="font-awesome.min.css">
</body>

</html>
