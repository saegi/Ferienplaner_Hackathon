<?php
	session_start();
	  if(!isset($_SESSION['id'])){
		session_destroy();
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
                    <h1>Allegra!</h1>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-12">
                    <h2>Willkommen beim Ferienplaner, geniessen Sie ihre Zeit.</h2>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-12">
                    <img src="https://www.graubuenden.ch/sites/default/files/content/steinbock-enavant-gian-giatgen-sommer-keyvisual.jpg" alt="Bild Erwachsener" width="50%">
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-12">
                    <a href="all.php" target="_self">
                        <button type="button" class="btn btn-default">Weiter</button>
                </div>
            </div>
            <div class="row row-centered">
            	<?php
				if(isset($_SESSION['id'])) {?>
					<div class="col-md-4">
						<a href="logout.php" target="_self">
							<button type="button" class="btn btn-default">Logout</button>
					</div>
                <?php } ?>
            	<?php
				if(!isset($_SESSION['id'])) {?>
					<div class="col-md-4">
						<a href="login.php" target="_self">
							<button type="button" class="btn btn-default">Login</button>
					</div>
                <?php } ?>
                <?php
				if(isset($_SESSION['id'])) {?>
                    <div class="col-md-4">
                        <a href="profil.php" target="_self">
                            <button type="button" class="btn btn-default" id="profil">Profil bearbeiten</button>
                    </div>
                <?php } ?>
                <?php
				if(isset($_SESSION['id'])) {?>
					<div class="col-md-4">
						<a href="index.php" target="_self">
							<button type="button" class="btn btn-default">Aktivitäten verwalten</button>
					</div>
				<?php } ?>
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
