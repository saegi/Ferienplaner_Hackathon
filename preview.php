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
            <div class="row row-centered">
                <div class="col-md-12">
                    <!--Progress Bar-->
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Ihre Angaben:</h1>
                    <br>
                    <div class="left">
                        <p>Wochentag:</p>
                        <h2>Mo,Do</h2>
                        <br>
                        <p>Kategorie:</p>
                        <h2>Natur</h2>
                        <br>
                        <p>Budget pro Person:</p>
                        <h2>35 CHF</h2>
                        <br>
                        <p>Personen:</p>
                        <h2>2 Senioren, 3 Kinder</h2>
                    </div>
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
                    <button type="button" class="btn btn-default">Aktivität planen!</button>
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