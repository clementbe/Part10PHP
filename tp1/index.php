
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>tp1 p10</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="align">
            <a href="../tp1/index.php"><button class="button">TP 1</button></a>
            <a href="../tp2/index.php"><button class="button">TP 2</button></a>
            <a href="../tp3/index.php"><button class="button">TP 3</button></a>
        </div>
        <div class="php">
            <form method="POST" action="index.php">
                <?php
                //Affichage de tout le formulaire.
                if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['birth']) && isset($_POST['pays']) && isset($_POST['natio']) && isset($_POST['adress']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['diplome']) && isset($_POST['num']) && isset($_POST['number']) && isset($_POST['lien']) && isset($_POST['heros']) && isset($_POST['hack']) && isset($_POST['infor'])) {
                    echo 'Votre nom :' . ' ' . strip_tags($_POST['name']) . ' ' . 'Votre prénom :' . ' ' . strip_tags($_POST['surname']) . ' ' . 'Votre date de naissance :' . ' ' . strip_tags($_POST['birth']) . ' ' . 'Votre pays de naissance :' . ' ' . strip_tags($_POST['pays']) . ' ' . 'Votre Nationalité :' . ' ' . strip_tags($_POST['natio']) . ' ' . 'Votre adresse :' . ' ' . strip_tags($_POST['adress']) . ' ' . 'Votre email :' . ' ' . strip_tags($_POST['email']) . ' ' . 'Votre numéro de téléphone :' . ' ' . strip_tags($_POST['telephone']) . ' ' . 'Votre ou vos diplome :' . ' ' . strip_tags($_POST['diplome']) . ' ' . 'Votre numéro pole emploi :' . ' ' . strip_tags($_POST['num']) . ' ' . 'Nombre de badge :' . ' ' . strip_tags($_POST['number']) . ' ' . 'Le lien codecademy :' . ' ' . strip_tags($_POST['lien']) . ' ' . 'Votre super héros et pourquoi :' . ' ' . strip_tags($_POST['heros']) . ' ' . 'Votre hack :' . ' ' . strip_tags($_POST['hack']) . ' ' . 'Avez vous déjà utilisé du code :' . ' ' . strip_tags($_POST['infor']);
                } else {
                    ?>
                    <label for='name'>Nom<br/><input type="text" name='name'></label>
                    <hr/>
                    <label for='surname'>Prénom<br/><input type="text" name='surname'></label>
                    <hr/>
                    <label for='birth'>Date de naissance<br/><input type="text" name='birth'></label>
                    <hr/>
                    <label for='pays'>Pays de naissance<br/><input type="text" name='pays'></label>
                    <hr/>
                    <label for='natio'>Nationalité<br/><input type="text" name='natio'></label>
                    <hr/>
                    <label for='adress'>Adresse<br/><textarea name='adress'></textarea></label>
                    <hr/>
                    <label for='email'>Email<br/><input type="text" name='email'></label>
                    <hr/>
                    <label for='telephone'>Téléphone<br/><input type="text" name='telephone'></label>
                    <hr/>
                    <label for='diplome'>Diplome<br/><input type="text" name='diplome'></label>
                    <hr/>
                    <label for='num'>Numéro pôle emploi<br/><input type="text" name='num'></label>
                    <hr/>
                    <label for='number'>Nombre de badge<br/><input type="text" name='number'></label>
                    <hr/>
                    <label for='lien'>Liens codecademy<br/><input type="text" name='lien'></label>
                    <hr/>
                    <label for='heros'>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?<br/><textarea name='heros'></textarea></label>
                    <hr/>
                    <label for='hack'>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)<br/><textarea name='hack'></textarea></label>
                    <hr/>
                    <label for='infor'>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?<br/><input type="text" name='infor'></label>
                    <br/>
                    <input type="submit" value="Validez">
                    <?php
                }
                ?>
            </form>
        </div>
    </body>
</html>