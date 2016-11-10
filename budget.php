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
                <div class="col-md-6 centered">
                    <div class="text_input">
                        <p>Maximales Budget pro Person</p>
                        <input type="range" name="zahlen" id="regler" min="0" max="100" value="0" step="5" onchange="showValue(this.value), wechsel()" />

                        <span id="kosten">0</span>
                        <script type="text/javascript">
                            function showValue(newValue) {
                                document.getElementById("kosten").innerHTML = newValue;
                            }
                        </script>

                        <article id="kosten_rechts">
                            <p>CHF</p>

                        </article>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>


        <!--jquery-->
        <script src="http://code.jquery.com/jquery-latest.js"></script>

        <!-- bootstrap.min.css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- bootstrap.min.js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!-- eigenes js -->
        <script src="js/js.js"></script>

        <!--eigenes css-->
        <link rel="stylesheet" href="css/css.css" stylesheet.css "">
    </body>

    </html>