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
                    <h1>An welchen Wochentagen soll die Aktivität stattfinden?</h1>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-12">

                    <form action="#" method="post">
                        <input type="checkbox" name="check_list[]" value="Mo">
                        <label>Mo</label>
                        <input type="checkbox" name="check_list[]" value="Di">
                        <label>Di</label>
                        <input type="checkbox" name="check_list[]" value="Mi">
                        <label>Mi</label>
                        <input type="checkbox" name="check_list[]" value="Do">
                        <label>Do</label>
                        <input type="checkbox" name="check_list[]" value="Fr">
                        <label>Fr</label>
                        <input type="checkbox" name="check_list[]" value="Sa">
                        <label>Sa</label>
                        <input type="checkbox" name="check_list[]" value="So">
                        <label>So</label>
                    </form>

                </div>
            </div>

            <br>
            <hr>
            <br>

            <div class="row row-centered">
                <div class="col-md-12">
                    <h1>Auf was für eine Aktivität haben sie Lust</h1>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-12">
                    <form action="#" method="post">
                        <input type="checkbox" name="check_list2[]" value="Natur">
                        <label>Natur</label>
                        <input type="checkbox" name="check_list2[]" value="Sport">
                        <label>Sport</label>
                        <input type="checkbox" name="check_list2[]" value="Wellness">
                        <label>Wellness</label>
                        <input type="checkbox" name="check_list2[]" value="Kultur">
                        <label>Kultur</label>
                        <input type="checkbox" name="check_list2[]" value="Unterhaltung">
                        <label>Unterhaltung</label>
                </div>
            </div>

            <br>
            <hr>
            <br>

            <div class="row row-centered">
                <div class="col-md-12">
                    <h1>Wer soll dabei sein?</h1>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-12">
                    <img src="http://image.flaticon.com/icons/png/512/10/10522.png" alt="Bild Erwachsener" width="200px">
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-12">
                    <input type="number">
                </div>
            </div>

            <br>
            <hr>
            <br>
            <hr>
            <br>


            <div class="row row-centered">
                <div class="col-md-4">
                    <a href="logout.php" target="_self">
                        <button type="button" class="btn btn-default">Logout</button>
                </div>
                <div class="col-md-4">
                    <a href="index.php" target="_self">
                        <button type="button" class="btn btn-default">Home</button>
                </div>
                <div class="col-md-4">
                    <a href="output.php" target="_self">
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
        <link rel="stylesheet" href="css/css.css" stylesheet.css "">



    </body>

    </html>