<?php
	session_start();
	if(!isset($_SESSION['id'])){
		header("Location:index.php");
    }else{
		$user_id = $_SESSION['id'];
	}
    
	require_once('system/data.php');
	require_once('system/security.php');

	if(isset($_POST['update-submit'])){
		$email = filter_data($_POST['email']);
		$password = filter_data($_POST['password']);
		$confirm_password = filter_data($_POST['confirm-password']);
		$username = filter_data($_POST['username']);
			
		$result = update_user($user_id, $email, $password, $confirm_password, $username);
	}

	$result = get_user($user_id);
	$user = mysqli_fetch_assoc($result);


?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profil bearbeiten</title>
    </head>

    <body>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                  <form id="login-form" action="#" method="post" role="form" style="display: block;">
                                      <h2>Profil bearbeiten</h2>
                                      <div class="form-group">
                                          <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="E-Mailadresse" value="">
                                          </div>
                                      <div class="form-group">
                                          <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Neuer Benutzername" value="">
                                        </div>
                                      <div class="form-group">
                                          <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Altes Passwort">
                                      </div>
                                      <div class="form-group">
                                          <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Neues Passwort">
                                      </div>
                                      <div class="col-xs-6 form-group pull-right">
                                          <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Speichern">
                                      </div>
                                  </form>

                                </div>
                              </div>
                        </div>
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6 tabs">
                                    <a href="#" id="register-form-link">

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
				<div class="col-md-12">
					<a href="index.php" target="_self">
					<button type="button" class="btn btn-default">Home</button>
				</div>
	  ?>

        <!--jquery-->
        <script src="http://code.jquery.com/jquery-latest.js"></script>

        <!-- bootstrap.min.css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- bootstrap.min.js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!--eigenes js.js-->
		<script src="js/js.js"></script>

        <!--eigenes css-->
        <link rel="stylesheet" href="css/css.css" stylesheet.css "">

        <!--css login-->
        <link rel="stylesheet" href="css/login.css" stylesheet.css "">
    </body>

    </html>
