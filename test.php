<?php 
session_start();
require_once 'connexion.php';

    
        if (isset($_POST['soumettre']))
        { 
          $query = "SELECT * FROM tbl_etudiant where username='".$_POST['txtnom']."' and 
              password='".$_POST['txtpw']."'";
         
          $result = mysqli_query($conn, $query);
          
          if($result)
          {
             if($_POST['txtnom']==="magister"&& $_POST['txtpw']==="signum")
             {
                header('Location: page_prof.php');
               
              }
          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
          {   
            if($_POST['txtnom']===$row['username'] && $_POST['txtpw']===$row['password'])
                {
                $_SESSION['etudiant']=$row['id_etudiant'];
                echo  $_SESSION['etudiant'];
               header('Location: page_etudiant.php');
                 
                }
          
            else { ?>
                  <?php    
                  header('Location:erreur.php');
                 ?>
                <?php 
                 }
        
            }
            
          } 
        }
        
          ?>


        
