<?php 
session_start();
  if(!isset($_SESSION['id'])){
    header("Location:index.php");
  }else{
		$user_id = $_SESSION['id'];
   }

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--eigenes css-->
        <link rel="stylesheet" href="css/css.css" stylesheet.css "">
        <title>Willkommen</title>
    </head>

    <body>
        <div class="container">
            <div class="row row-centered">
                <div class="col-md-12">
                    <!--Progress Bar-->
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                    </div>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-12">
                    <h1>Wer soll dabei sein?</h1>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-4">
                    <img src="http://image.flaticon.com/icons/svg/43/43241.svg" alt="Bild Kind" width="200px">
                </div>
                <div class="col-md-4">
                    <img src="http://image.flaticon.com/icons/png/512/10/10522.png" alt="Bild Erwachsener" width="200px">
                </div>
                <div class="col-md-4">
                    <img src="http://image.flaticon.com/icons/png/512/27/27445.png" alt="Bild Senior" width="200px">
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-4">
                    <input type="number">
                </div>
                <div class="col-md-4">
                    <input type="number">
                </div>
                <div class="col-md-4">
                    <input type="number">
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-4">
                    <a href="categories.php" target="_self">
                        <button type="button" class="btn btn-default">Zurück</button>
                </div>
                <div class="col-md-4">
                    <a href="index.php" target="_self">
                        <button type="button" class="btn btn-default">Home</button>
                </div>
                <div class="col-md-4">
                    <a href="budget.php" target="_self">
                        <button type="button" class="btn btn-default">Weiter</button>
                </div>
            </div>
        </div>
        <?php
				if(isset($_SESSION['id'])) {?>
					<p>Hallo User </p>
					
			<?php } ?>

        <!--jquery-->
        <script src="http://code.jquery.com/jquery-latest.js"></script>

        <!-- bootstrap.min.css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- bootstrap.min.js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!--eigenes css-->
        <link rel="stylesheet" href="css/css.css" stylesheet.css "">
    </body>

    </html>