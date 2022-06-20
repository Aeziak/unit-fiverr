<!DOCTYPE html>
<html lang="en fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="../css/registration.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
    <div class="login-form">
        <div class="titleInscription">Inscription</div>
        <form action="inscription_traitement.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="detail">Pseudo</span>
                    <input type="text" name="pseudo" placeholder="Entrer le pseudo" required> 
                </div>
                <div class="input-box">
                    <span class="detail">Prénom</span>
                    <input type="text" name="fist name" placeholder="Entrer votre prénom" required>
                </div>
                <div class="input-box">
                    <span class="detail">Nom</span>
                    <input type="text" name="name" placeholder="Entrer votre nom" required>
                </div>
                <div class="input-box">
                    <span class="detail">Email</span>
                    <input type="text" name="email" placeholder="Entrer l'email" required>
                </div>
                <div class="input-box">
                    <span class="detail">Mot de passe</span>
                    <input type="text" name="password" placeholder="Entrer le mot de passe" required>
                </div>
                <div class="input-box">
                    <span class="detail">Confirmation du mot de passe</span>
                    <input type="text" name="password_confirm" placeholder="Confirmer le mot de passe" required>
                </div>
            </div>
            <div class="gender-details">
                <input type="radio" name="gender" id="dot-1">
                <input type="radio" name="gender" id="dot-2">
                <input type="radio" name="gender" id="dot-3">
                <span class="gender-title">Genre</span>
                <div class="categoryGender">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="genre">Homme</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="genre">Femme</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="genre">Secret</span>
                    </label>
                </div>
            </div>
            <div class="buttonValid">
                <input type="submit" value="S'inscrire">
            </div>
            <div>
                <a href="../HTML/login.php" class="login">Déjà membre</a>
            </div>
            <?php
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);
                    
                    switch($err)
                    {
                        case 'success':
                            ?>
                            <div class="alert alert-success" role="alert">
                                <strong>Succès !</strong> Votre compte a été créé avec succès !
                            </div>
                            <?php
                            break;
                        case 'password':
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Erreur !</strong> Les mots de passe ne correspondent pas.
                            </div>
                            <?php
                            break;
                        case 'email':
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Erreur !</strong> L'adresse email non valide.
                            </div>
                            <?php
                            break;
                        case 'email_length':
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Erreur !</strong> L'adresse email doit contenir entre 3 et 50 caractères.
                            </div>
                            <?php
                            break;
                        case 'pseudo_length':
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Erreur !</strong> Le pseudo doit contenir entre 3 et 50 caractères.
                            </div>
                            <?php
                            break;
                        case 'already':
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Erreur !</strong> Compte déjà existant.
                            </div>
                            <?php
                            break;
                    }
                }
            ?>
                </div>
            </div>
        </form>
    </div>
</body>
</html>