<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>tp3 p10</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="align">
            <a href="../tp1/index.php"><button class="button">TP 1</button></a>
            <a href="../tp2/index.php"><button class="button">TP 2</button></a>
            <a href="../tp3/index.php"><button class="button">TP 3</button></a>
        </div>
        <div class="php">
            <?php

            function show_tableau() {
                $portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
                $portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
                $portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
                $portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
                //déclaration de la boucle foreach pour la variable portrait1 
                foreach ($portrait1 as $identity => $profil) {
                    //affichage de tout le tableau
                    if ($identity == 'name') {
                        echo $profil;
                    } elseif ($identity == 'firstname') {
                        echo $profil;
                    } elseif ($identity == 'portrait') {
                        ?>
                        <img src="<?php echo $result ?>">
                        <?php
                    }
                }
                //déclaration de la boucle foreach pour la variable portrait2
                foreach ($portrait2 as $identity => $profil) {
                    //affichage de tout le tableau
                    if ($identity == 'name') {
                        echo $profil;
                    } elseif ($identity == 'firstname') {
                        echo $profil;
                    } elseif ($identity == 'portrait') {
                        ?>
                        <img src="<?php echo $profil ?>">
                        <?php
                    }
                }
                ?>
                <br/>
                <?php
                //déclaration de la boucle foreach pour la variable portrait3
                foreach ($portrait3 as $identity => $profil) {
                    //affichage de tout le tableau
                    if ($identity == 'name') {
                        echo $profil;
                    } elseif ($identity == 'firstname') {
                        echo $profil;
                    } elseif ($identity == 'portrait') {
                        ?>
                        <img src="<?php echo $profil ?>">
                        <?php
                    }
                }
                ?>
                <br/>
                <?php
                //déclaration de la boucle foreach pour la variable portrait4
                foreach ($portrait4 as $identity => $profil) {
                    //affichage de tout le tableau
                    if ($identity == 'name') {
                        echo $profil;
                    } elseif ($identity == 'firstname') {
                        echo $profil;
                    } elseif ($identity == 'portrait') {
                        ?>
                        <img src="<?php echo $profil ?>">
                        <?php
                    }
                }
                ?>
                <br/>
                <?php
            }

            show_tableau()
            ?>
        </div>
    </body>
</html>