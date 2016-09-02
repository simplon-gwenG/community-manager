<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
        <title> Admin login page </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script src="http://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../js/carousel.js"></script>
        <script type="text/javascript" src="../js/form.js"></script>
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
</head>

    <body >
        <?php
            include('../connexion.php');
         ?>

        	<header>
                <div class="header_container">
                    <div id="connexion">
                        <h2>Se connecter</h2>
                    </div><!-- end connexion -->
                    <div class="clearer"></div>
                </div> <!-- end header_container -->
            </header> <!-- end header -->


            <div id="form">
                <form name="login" action="login.php" method="POST">
                        <input type="text" name="username" id="username" placeholder="identifiant" required="required">
                        <input type="password" name="password" id="password" placeholder="password" required="required">
                        <button>Envoyer</button>
                </form><!-- end of form -->
                <?php
                    if (isset($_POST) AND !empty($_POST)) {

                        $req = $bdd->prepare('SELECT * FROM admin WHERE username=:username and password=:password');
                        $req -> execute(array(
                            'username'=> $_POST['username'],
                            'password'=> $_POST['password'],
                        ));
                        $user=$req->fetch();
                        if ($user) {
                            $_SESSION['admin'] = $_POST['username'];
                            Header('Location: index.php');
                            exit();
                        } else {
                            $error='Identifiants incorrects';
                        }
                    }
                    if (isset($error)) {
                        echo '<div class="error">'.$error.'</div>';
                    }
                        ?>
        </body>
        </html>
