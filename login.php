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
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="login-form" action="#" method="post" role="form" style="display: block;">
                                        <h2>LOGIN</h2>
                                        <div class="form-group">
                                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="col-xs-6 form-group pull-left checkbox">
                                            <input id="checkbox1" type="checkbox" name="remember">
                                            <label for="checkbox1">Remember Me</label>
                                        </div>
                                        <div class="col-xs-6 form-group pull-right">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                        </div>
                                    </form>
                                    <form id="register-form" action="#" method="post" role="form" style="display: none;">
                                        <h2>REGISTER</h2>
                                        <div class="form-group">
                                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
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
                                        <div class="login">LOGIN</div>
                                    </a>
                                </div>
                                <div class="col-xs-6 tabs">
                                    <a href="#" id="register-form-link">
                                        <div class="register">REGISTER</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h6 style="font-size:14px;font-weight:100;color: #fff;">Coded with <i class="fa fa-heart red" style="color: #BC0213;"></i> by <a href="http://hashif.com" style="color: #fff;" target="_blank">Hashif</a></h6>
                </div>
            </div>
        </footer>


        <!--jquery-->
        <script src="http://code.jquery.com/jquery-latest.js"></script>

        <!-- bootstrap.min.css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- bootstrap.min.js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!--eigenes css-->
        <link rel="stylesheet" href="css/css.css" stylesheet.css "">

        <!--css login-->
        <link rel="stylesheet" href="css/login.css" stylesheet.css "">
    </body>

    </html>