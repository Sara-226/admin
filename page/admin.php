<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJOUTER APPRENANT</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fonts/css/all.css">
    <link rel="stylesheet" href="../css/admin.css">

</head>

<body>

    <div class="navigation">
        <!--la classe navigation a une balise générale navbar qui contiendra du text et une image et si dessous nous avont la balise qui contiendra un toggle(burger) qui aurra pour classe générale bouton -->
        <!--
        <div class="boukon ">
            <div class="menu-main">
                <i class="fas fa-bars"></i>

                <nav class="menu">
                    <ul>
                        <li> <a href="Ajouter.php">AJOUTER</a> </li>
                        <li> <a href="Modifier.php">MODIFIER</a> </li>
                        <li> <a href="DIASIM.php">LISTE DES APPRENANT </a> </li>
                    </ul>
                </nav>
            </div>
        </div>
        -->
        <!--fin de la dive bouton et juste apres debut de la div des ajout et de limage simplon-->
        <nav class="">
            <h1><strong>SIMPLON BURKINA</strong></h1>
        </nav>
    </div>
    <div class="container-fluid classer">
        <button type="submit" class="bton"><a href="administrateur.php">Connextion</a></button>
    </div>
    <div class="formulaire container">
        <div class="inscri container-fluid">
            <h5>Inscription</h5>
        </div>
        <form action="recupadmin.php" method="post" class="norma">
            <div class="ordone">
                <div class="em">
                    <label for="email">Email:</label><br><br>
                    <label for="nom">Nom:</label><br><br>
                    <label for="motsdpass">mot de passe: </label><br><br>
                    <label for="verification">confimation: </label>
                </div>
                <div class="pm">
                    <input type="text" id="fname" name="email" class="aligne"><br><br>

                    <input type="text" id="lname" name="nom" class="aligne"> <br><br>

                    <input type="text" id="lame" name="motsdpasse" class="aligne"><br><br>

                    <input type="text" id="lame" name="verification" class="aligne">

                </div>
            </div>
            <button type="submit" class="bouton">Devenir admin</button>
        </form>

    </div>


    <script>
    </script>
</body>

</html>