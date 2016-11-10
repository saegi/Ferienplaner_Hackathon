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
        <!--eigenes css-->
        <link rel="stylesheet" href="css/css.css" stylesheet.css "">
        <title>Willkommen</title>
    </head>

    <body>
        <div class="container">
            <div class="row row-centered">
                <div class="col-md-12 centered">
                    <input id="ex8" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14" />
                </div>
            </div>
        </div>



        <!-- bootstrap.min.css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- bootstrap.min.js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!-- javascript -->
        <script src="js/js.js"></script>
    </body>

    </html>