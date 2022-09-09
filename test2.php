<?php
session_start();
require_once 'connexion.php';
if (isset($_POST['soumettre']))

 {  
    $usernameetd=$_POST['txtuseretud'];
    $pwetd=$_POST['passetud'];
    $nometd=$_POST['txtnometud'];
    $prenometd=$_POST['txtprenometud'];
    $numetd=$_POST['txtphone'];
    $courrieletd=$_POST['txtcourriel'];
    
    $query="INSERT INTO tbl_etudiant(username,password,nom,prenom,no_telephone,courriel)VALUES ('".$usernameetd."','".$pwetd."','".$nometd."','".$prenometd."','".$numetd."','".$courrieletd."')";
    
    $result= mysqli_query($conn,$query);
    
    if($result)
    {
       
        echo"Insertion des donnee valide";
    }
    

    else{  
 
		    	echo 'Formulaire pas envoyé';
			echo" l'addresse courriel ou le nom d'utilisateur que vous avez saisie existe déja veuillez réessayer.";
                       
        }
    
  }
    
 
?>
        
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<title>Authentification</title>
</head>
<body>
</body>
</html>
<?php


?>