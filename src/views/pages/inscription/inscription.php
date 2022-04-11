<?php require 'views/components/header/header.php'; ?>
<?php require 'views/components/checkbox/checkbox.php'; ?>

<html>
    <head>
        <?php infoHead('S\'inscrire','Inscris toi pour une meilleur expérience', '/views/pages/inscription/inscription.css');?>
    </head>
    
    <body>
        <div id="container">
            <div id="centerDiv">              
                <form method="POST">
                    <h1 id="titleForm">Inscription</h1>
                    <div id="errorField"><p id="textError">Format du mail incorrect.</p></div>
                    
                    <div class="labelsDiv"><label class="labelsForm" for="email">Email</label></div>
                    <input id="email" class="input" type="email" placeholder="Entrer l'email" name="email" required>

                    <div class="labelsDiv"><label class="labelsForm" for="pseudo">Nom d'utilisateur</label></div>
                    <input id="pseudo" class="input" type="pseudo" placeholder="Entrer le nom d'utilisateur" name="pseudo" required>

                    <div class="labelsDiv"><label class="labelsForm" for="password">Mot de passe</label></div>
                    <input id="password" class="input" type="password" placeholder="Entrer le mot de passe" name="password" required>

                    <div id="divConditions">
                        <?php createCheckbox('acceptConditions','acceptConditions','J\'ai lu et j\'accepte les termes d\'utilisation ainsi que la politique de confidentialité.','l','enabled'); ?>
                    </div>

                    <input class="default m" type="submit" id="submit" value="S'INSCRIRE" >
                    
                    <?php
                    if (isset($_GET["error"])) {
                        $err = $_GET["error"];
                        echo "<p style='color:red'>$err</p>";
                    }
                    ?>
                    
                </form>
                <div>
                <p id="text">
                    Vous avez déjà un compte ? 
                    <a href="/connexion" class="links">Se connecter</a>
                </p>
                </div> 
            </div>
        </div>
    </body>
</html>