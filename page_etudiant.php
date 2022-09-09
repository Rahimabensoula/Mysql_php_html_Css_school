<?php
session_start();

if (isset($_SESSION['etudiant'])) {
    
};
require_once 'connexion.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page étudiants</title>
        <link rel="stylesheet" href="stylepp3f.css" />
    </head>
    <body>
        <P><h1><b>Liste des cours disponibles :</b></h1>
        
        <?php
        if (isset($_SESSION['etudiant'])) {
            $id = $_SESSION['etudiant'];
            $reqselect = "SELECT  tbl_etudiant.id_etudiant,tbl_cours.code_cours,titre,duree
 FROM tbl_inscription
INNER JOIN tbl_etudiant ON  tbl_inscription.id_etudiant= tbl_etudiant.id_etudiant and tbl_etudiant.id_etudiant!='$id'
left join tbl_cours  ON tbl_inscription.code_cours= tbl_cours.code_cours";

            ?>
        </p>

        <table width='80%' border='1'>
            <tr>
               
                
                 <th>Titre du cours</th>
                 <th>Code du cours</th>
                <th>Nombre d'heure</th>
                

            </tr>
            
            <?php
            $resulta = mysqli_query($conn, $reqselect);
        if ($resulta) {    
            while ($row = mysqli_fetch_array($resulta, MYSQLI_ASSOC)) {
                   
                ?>
            <?php
            echo '<td>' . $row['titre'] . '</td><td>' . $row['code_cours'] . '</td><td>' .$row['duree'] .'</td></tr>';?>
            <tr>
        
                 <td><button><a href="couretudiant.php?ins=<?php echo $row['code_cours'];?>">s'inscrire</a></button></td>
               
            </tr>
        <?php
    }
    ?>
            <?php
                      }
        }
        ?>
           
            
    </table>






    <P><h1><b>Liste des cours auxquels deja inscrit(e)</b></h1>
<?php
if (isset($_SESSION['etudiant'])) {
    $id = $_SESSION['etudiant'];

    $query = "SELECT  tbl_etudiant.id_etudiant,tbl_cours.code_cours,titre
 FROM tbl_inscription
INNER JOIN tbl_etudiant ON  tbl_inscription.id_etudiant= tbl_etudiant.id_etudiant and tbl_etudiant.id_etudiant='$id'
left join tbl_cours  ON tbl_inscription.code_cours= tbl_cours.code_cours
";
    ?>
    </p>
    <table width='80%' border='1'>
        <tr>
           
            <th>Titre du cours</th>
            <th>Code du cours</th>

        </tr>
    <?php
    $result = mysqli_query($conn, $query);
    if ($result) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo '<td>' . $row['titre'] . '</td><td>' . $row['code_cours'] . '</td></tr>';
        }
        ?>


            <?php
        }
    }
    ?> 




</table>

</body>
</html>