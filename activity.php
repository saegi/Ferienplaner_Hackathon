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
        <title>Ihre Übersicht</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Ihre Aktivität</h1>
                    <br>
                    <div class="left">
                        <p>Wird durch Datenbank ausgefüllt!</p>
                    </div>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-4">
                    <a href="budget.php" target="_self">
                        <button type="button" class="btn btn-default">Speichern (nur eingelogt)</button>
                </div>
                <div class="col-md-4">
                    <a href="index.php" target="_self">
                        <button type="button" class="btn btn-default">Neue Aktivität</button>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-default">Zurück auf Start</button>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-4">
                    <a href="budget.php" target="_self">
                        <button type="button" class="btn btn-default">Login</button>
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
        <link rel="stylesheet" href="css/css.css" stylesheet.css "">
    </body>

    </html>