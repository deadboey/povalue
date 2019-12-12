<?php
include("connect.php");
session_start();
if(array_key_exists("id", $_SESSION)) {
   header("location: main.php"); 
}                      
?>              
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="main.css" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
        <title>Anmeldung</title>
    </head>
    <body id='logreg'>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="welcome-text">
                                <p><h3>Willkommen bei PoValue</h3></p>
                                <hr />
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="active" id="login-form-link">Login</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" id="register-form-link">Registrierung</a>
                                </div>
                            </div>
                            <hr />
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="login-form" method="post" role="form" style="display: block;">
                                        <div class="form-group">
                                            <input type="email" id="email_log" tabindex="1" class="form-control" placeholder="Email Adresse" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="password_log" tabindex="2" class="form-control" placeholder="Passwort" />
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="button" onclick="login()" class="btn btn-lg btn-primary btn-block" value="Log In" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <a href="pwforgot.html" tabindex="5" class="forgot-password">Passwort vergessen?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form id="register-form"  method="post" role="form" style="display: none;">
                                        <div class="form-group">
                                            <input type="text" name="vorname" id="firstname" tabindex="1" class="form-control" placeholder="Vorname" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="nachname" id="secondname" tabindex="1" class="form-control" placeholder="Nachname" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Adresse" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="password" tabindex="2" class="form-control" placeholder="Passwort" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password"  id="password_check" tabindex="2" class="form-control" placeholder="Passwort wiederholen" />
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="button" onclick="register()" class="btn btn-lg btn-primary btn-block"  value="Registrieren" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <p class="mt-5 mb-3 text-muted">&copy; 2019 PoValue</p>
        </div>
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="functions.js"></script>
    </body>