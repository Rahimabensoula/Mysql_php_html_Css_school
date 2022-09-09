<?php
session_start();
require_once 'connexion.php';
echo $_SESSION['etudiant'];
$sup=$_GET['sup'];

echo $sup;
?>
<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer</title>
    <link rel="stylesheet" href="stylepp3f.css" />
</head>
<body>
    <div id="contenu">
        <form name="formins"  method='post' action='' class="formulaire1">
              
            <h2 align="center">Supprimer le cours ici:</h2>
            
            <label><b>Informations sur le cours:</b></label>
            <input type="text" name="txtcode2" class="zonetext" value="<?php echo $sup?>" readonly>
             
            <input type="submit" name="btsup" value="supprimer le cours">
            
            <label style="text-align: center ;color: royalblue;">
                
                
            <p><a href="page_prof.php" class="submit">Retour a votre page</a></p>
            
            
           
                
                <?php
                if (isset($_POST['btsup']))
                {
                   
                     $code=$_POST['txtcode2'];
                     $id=$_SESSION['etudiant'];
                 
          
                    
                   $requete="DELETE FROM tbl_cours WHERE not EXISTS (SELECT * FROM tbl_inscription WHERE code_cours = tbl_cours.code_cours)"; 
            $result= mysqli_query($conn,$requete);
           
        if($result)
        {
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                
              //la suppression se fait selon la condition  mais aucun message ne s'affiche   
            echo'Suppression effectuee!';
            
            
            
                 }
                 
        
        }
        else
        {   /// la suppression ne se fait pas mais le message ne s'affiche pas 
            echo'Echec de suppression ';
        }


                }  
                ?>
            
        </form>
    </div>
    

</body>
</html>
