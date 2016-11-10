<?php 
	session_start();
    if(isset($_SESSION['id'])) unset($_SESSION['id']);
    session_destroy();

?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Willkommen</title>
</head>
<body>
	<div class="container">
		<h1>Allegra!</h1>
		<button type="button" class="btn btn-default">Links</button>
	</div>



    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- bootstrap.min.js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>