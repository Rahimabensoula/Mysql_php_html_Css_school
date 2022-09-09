<?php
session_start();
require_once 'connexion.php';
echo $_SESSION['etudiant'];
$ins=$_GET['ins'];
echo $ins;
?>
<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="stylepp3f.css" />
</head>
<body>
    <div id="contenu">
        <form name="formins"  method='post' action='' class="formulaire1">
              
            <h2 align="center">S'inscrire ici:</h2>
            
            <label><b>Informations sur le cours:</b></label>
            <input type="text" name="txtcodc" class="zonetext" value="<?php echo $ins?>" readonly>
             
            <input type="submit" name="btins" value="s'inscrire">
            
            <label style="text-align: center ;color: royalblue;">
                
                
            <p><a href="page_etudiant.php" class="submit">Liste des cours</a></p>
            
            
           
                
                <?php
                if (isset($_POST['btins']))
                {
                  //$query=" INSERT INTO tbl_inscription (id_etudiant,code_cours)VALUES ('".$_SESSION['etudiant']."','".$ins."')";
           $query="insert into tbl_inscription (id_etudiant,code_cours)"
                   . " WHERE not EXISTS (SELECT * FROM tbl_inscription WHERE id_etudiant = tbl_etudiant.id_etudiant)"
                   . "VALUES ('".$_SESSION['etudiant']."','".$ins."')"; 
    $result= mysqli_query($conn,$query);
    
    if($result){ 
        ///affichege en double  a cause de la boucle while ! pa eu le temps de la corriger 
         while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    
        echo"Insertion des donnee valide";
 
    }
    
         }
    else{  
		    	echo "echec de l'inscription";
   
         }
                }
               
                
                
                ?>
            
        </form>
    </div>
    
    
    
    
    
    
    
</body>
</html>
