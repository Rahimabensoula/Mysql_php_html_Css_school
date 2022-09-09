<?php
require_once 'connexion.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page prof</title>
        <link rel="stylesheet" href="stylepp3f.css" />
    </head>
    <body>

        <form  action="" method="post"   >


            <div id="contenu">

                <h2 align="center">Ajouter ou supprimer  un cours :</h2>

                <label><b>Titre du cours</b></label>
                <input type="text" name="txttitre" class="zonetext"placeholder="Entrer nom" required ></input>
                <label><b>Code du cours</b></label>
                <input type="text" name="txtcode" class="zonetext"placeholder="Entrer prenom" required ></input>
                <label><b>Durée du cours</b></label>
                <input type="text" name="txtduree" class="zonetext"placeholder="Entrer un nom d'utilisateur" required ></input>
                <label style="text-align: center ;color: royalblue;">
                    <button type="submit" name="submitcour" id="ajouter">Ajouter</button>


                    <!-- Ajouter un cours -->                
                    <?Php
                    if (isset($_POST['submitcour'])) {

                        $titre = $_POST['txttitre'];
                        $code = $_POST['txtcode'];
                        $duree = $_POST['txtduree'];

                        $query = "INSERT INTO tbl_cours(code_cours,titre,duree)VALUES ('" . $code . "','" . $titre . "','" . $duree . "')";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            echo 'Ajout reussi !';
                        } else {
                            header('Location:erreurprof.php');
                        }
                    }
                    ?>
                    </form>
            </div>
            <P><h1><b>Liste des cours :</b></h1></p>
        <table width='80%' border='1'>
            <tr>
                <th>Titre du cours</th>
                <th>Code du cours</th>
                <th>Nombre d'heure</th>
            </tr>
     
 
<?php
         $reqselect= "SELECT * from tbl_cours";
        $resulta = mysqli_query($conn, $reqselect);
            if ($resulta) {
                while ($row = mysqli_fetch_array($resulta, MYSQLI_ASSOC)) {
                    ?>
                    <?php echo '<td>' . $row['titre'] . '</td><td>' . $row['code_cours'] . '</td><td>' . $row['duree'] . '</td></tr>'; ?>
                    <tr>

                        <td> <button  name="suppcour"id="submit"><a href="supcour.php?sup=<?php echo $row['code_cours']; ?>">Supprimer</a></button></td>

                    </tr>
            <?php
        }
        ?>
                <?php
            }
            ?>  
</body>
</html>
