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
        <title>Willkommen</title>
    </head>

    <body>
        <div class="container">
            <div class="row row-centered">
                <div class="col-md-12">
                    <!--Progress Bar-->
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                    </div>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-12">
                    <h1>Budget</h1>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-12">
                    <div class="text_input">
                        <p>Maximales Budget pro Person</p>
                        <input type="range" name="zahlen" id="regler" min="0" max="250" value="0" step="5" onchange="showValue(this.value), wechsel()" />

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
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-4">
                    <a href="people.php" target="_self">
                        <button type="button" class="btn btn-default">Zurück</button>
                </div>
                <div class="col-md-4">
                    <a href="index.php" target="_self">
                        <button type="button" class="btn btn-default">Home</button>
                </div>
                <div class="col-md-4">
                    <a href="preview.php" target="_self">
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

        <!-- eigenes js -->
        <script src="js/js.js"></script>

        <!--eigenes css-->
        <link rel="stylesheet" href="css/css.css" stylesheet.css "">
    </body>

    </html>