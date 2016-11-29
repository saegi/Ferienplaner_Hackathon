<?php
	session_start();
    if(!isset($_SESSION['id'])){
	   header("Location:index.php");
    }else{
		$user_id = $_SESSION['id'];
   }

if(isset($_POST['go-button'])){
			$people = filter_data($_POST['people']);
            $days = filter_data($_POST['day']);
            $categories = filter_data($_POST['category']);

$wochensql = wochentage($days);
$catsql = kategorien($categories);
$peoplesql = personen($people);

}

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
                <div class="col-md-8">
                    <div class="thumbnail" style="margin:0px auto">
                        <img src="bilder/web/sourceonestuff.jpg" alt="source_website">
                        <div class="caption">
                            <h3><?php echo $Aktivitaeten['name']; ?></h3>
                            <p>
                                <?php echo $Aktivitaeten['beschreibung']; ?>
                            </p>
                            <p><a href="http://www.sourceonestaff.com/" class="btn btn-primary" target="_blank" role="button">Speichern (nur eingeloggt)</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-4">
                    <a href="logout.php" target="_self">
                        <button type="button" class="btn btn-default">Logout</button>
                </div>
                <div class="col-md-4">
                    <a href="activity.php" target="_self">
                        <button type="button" class="btn btn-default">Neue Aktivität</button>
                </div>
                <div class="col-md-4">
                    <a href="index.php" target="_self">
                        <button type="button" class="btn btn-default">Zurück auf Start</button>
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