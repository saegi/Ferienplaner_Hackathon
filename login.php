<?php
	session_start();
    if(isset($_SESSION['id'])) unset($_SESSION['id']);
    session_destroy();


	require_once('system/data.php');
	require_once('system/security.php');


	$error = false;
	$error_msg = "";
	$success = false;
	$success_msg = "";

	if(isset($_POST['login-submit'])){
		if(!empty($_POST['email']) && !empty($_POST['password'])){
			$email = filter_data($_POST['email']);
			$password = filter_data($_POST['password']);

			$result = login($email, $password);

			$row_count = mysqli_num_rows($result);

			if($row_count == 1){
				$user = mysqli_fetch_assoc($result);
				session_start();
				$_SESSION['id'] = $user['user_id'];
				header("Location:index.php");
			}else{
				$error = true;
				$error_msg .= "Leider konnte wir Ihre E-Mailadresse oder Ihr Passwort nicht finden.</br>";
			}
		}else{
			$error = true;
			$error_msg .= "Bitte füllen Sie beide Felder aus.</br>";
		}
	}

	if(isset($_POST['register-submit'])){
		if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm-password'])){
		    $username = $_POST['username'];
			$email = $_POST['email'];
		    $password = $_POST['password'];
		    $password_confirm = $_POST['confirm-password'];
		    if ($password == $password_confirm){
				if (register($username, $email, $password)) {
				  $success = true;
				  $success_msg .= "Sie haben sich erfolgreich registriert<br/>";
				  $success_msg .= "Bitte loggen Sie sich jetzt ein.<br/>";
				}else{
				  $error = true;
				  $error_msg .= "Es gibt ein Problem mit der Datenbankverbindung.";
				}
		    }else{
			    $error = true;
			    $error_msg .= "Bitte überprüfen Sie die Passworteingabe.<br/>";
        	 }
        }else{
            $error = true;
            $error_msg .= "Bitte füllen Sie alle Felder aus.<br/>";
        }
    }
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Einloggen</title>
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
                                        <h2>Einloggen</h2>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Adresse" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Passwort">
                                        </div>
                                        <div class="col-xs-6 form-group pull-right">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Einloggen">
                                        </div>
                                    </form>
                                    <form id="register-form" action="#" method="post" role="form" style="display: none;">
                                        <h2>Registrieren</h2>
                                        <div class="form-group">
                                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Benutzername" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Addresse" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Passwort">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Passwort wiederholen">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Registrieren">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6 tabs">
                                    <a href="#" class="active" id="login-form-link">
                                        <div class="login">EINLOGGEN</div>
                                    </a>
                                </div>
                                <div class="col-xs-6 tabs">
                                    <a href="#" id="register-form-link">
                                        <div class="register">REGISTRIEREN</div>
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
			</div>
        </div>
  		<!-- Error NAchrichten Ausgeben -->
       <?php
	   		if($success == true){
		?>
	 		<div class="alert alert-success" role="alert"><?php echo $success_msg ?></div>
      <?php
			}
	   		if($error == true){
		?>
       <div class="alert alert-danger" role="alert"><?php echo $error_msg; ?></div>
       <?php
      }
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
