
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>tp2 p10</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="align">
            <a href="../tp1/index.php"><button class="button">TP 1</button></a>
            <a href="../tp2/index.php"><button class="button">TP 2</button></a>
            <a href="../tp3/index.php"><button class="button">TP 3</button></a>
        </div>
        <div class="php">
            <form method="POST">
                <select name="gender">
                    <option value="homme" <?php if (isset($_POST['gender']) && $_POST['gender']== "homme"){echo "selected";} ?>>Homme</option>
                    <option value="femme" <?php if (isset($_POST['gender']) && $_POST['gender']== "femme"){echo "selected";} ?>>Femme</option>
                </select><hr/>
                <label for='name'>Nom :<input type="text" name='name' value="<?php if (isset($_POST['name'])){echo $_POST['name'];} ?>"></label><hr/>
                <label for='surname'>Prénom :<input type="text" name='surname' value="<?php if (isset($_POST['surname'])){echo $_POST['surname'];} ?>"></label><hr/>
                <label for='age'>Age :<input type="text" name='age' value="<?php if (isset($_POST['age'])){echo $_POST['age'];} ?>"></label><hr/>
                <label for='societe'>Société :<input type="text" name='societe' value="<?php if (isset($_POST['societe'])){echo $_POST['societe'];} ?>"></label>
                <input type="submit" value="validez">
            </form>
            <?php 
            if(isset($_POST['gender']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['age']) && isset($_POST['societe'])){
                echo 'Bonjour' . ' ' . strip_tags($_POST['gender']) . ' ' . strip_tags($_POST['name']) . ' ' . strip_tags($_POST['surname']) . ' ' . 'tu as' . ' ' . strip_tags($_POST['age']) . ' ' . 'ans, et tu travail dans la société' . ' ' . strip_tags($_POST['societe']);
            }
            ?>
        </div>
    </body>
</html>