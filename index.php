<!DOCTYPE html>
<html>
    <head>
        <title>Tu vas vraiment faire ca ?</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <br><br><br><br><br><br>
    <h1>Mot de passe :</h1>
    <br><br>

    
    
    <div class='divform'>
        <form method="post">
            <input type="text" id="fname" name="motdepasse"><br><br>
            <input type="submit" name='valider' value="Valider">
        </form>
    </div>

    <?php
        if(array_key_exists('valider', $_POST)) {
            func1();
        }
        
        function func1() {
            if ($_POST['motdepasse'] == 'EnVraiTuVasVraimentKiffer') {
                passcorrect();
            } else {
                passincorrect();
            }
        }
        function passincorrect() {
            echo '<script>alert("Mot de passe incorrect !")</script>';
        }
        function passcorrect() {
            echo '<script>alert("simon.va.sauter@gmail.com\njtenvoiedanslesairs")</script>';
        }
    ?>
    

    <!--Mot de passe : EnVraiTuVasVraimentKiffer-->
    </body>
</html>