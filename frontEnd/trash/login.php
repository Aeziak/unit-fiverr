<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <title>Login</title>
        <link rel="stylesheet" href="../css/login.css" media="screen" type="text/css" />
        <link rel="icon" type="Création-sans-titre.svg" href="../images/favicon-32x32.ico" />
    </head>
    <body>
        <div id="login-form">
            <!-- zone de connexion -->
        <?php
            if(isset($_GET['login_err']))
            {
               $err = htmlspecialchars($_GET['login_err']);

               switch($err)
               {
                     case 'password':
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Erreur !</strong> Mot de passe incorrect.
                            </div>
                        <?php
                        break;
                        case 'email':
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Erreur !</strong> Email incorrect.
                            </div>
                        <?php
                        break;
                        case 'already':
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Erreur !</strong> compte non existant.
                            </div>
                        <?php
                        break;
                }
            }
        ?>

            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                <input type="checkbox" name="rememberme" id="remembercheckbox" /><label for="remembercheckbox">Se souvenir de moi</label>
                <input type="submit" id='submit' value='LOGIN'>
                <hr>
                <hr>
                <div class="superpositionCreateForgot">
                <a href="../HTML/reset_pass.html" id="forgot_pswd" class="mdpCuc">Mot de passe oublié</a>
                </div>
                <div class="superpositionCreateForgot">
                <a href="../HTML/registration.php" id="create_account" class="mdpCuc">Créer un compte</a>
                </div>
            </form>
        </div>
    </body>
</html>