<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page accueil</title>
        <link rel="stylesheet" href="stylepp3f.css" />
        <script src="javascript/scriptpopup.js" ></script>
    </head>
 <header> 
          <ul>
              <li id="logo"><a href="#">College CDI </a> 
          <img src="images/logo.png" WIDTH=200px HEIGHT=100px />
          </ul>
            <nav>
                <ul>
                   <li><a onclick="affichepop2();">Créer un compte</a></li>
                   <li><a onclick="affichepop();">Ouvrir une session</a></li>
                </ul>
            </nav>


    </header>


    <body>
        <main>
        <div id="entete">
            <video autoplay="autoplay" class="video_entete">
                <source src="images/videocdi.mp4" type="video/mp4"/>
            </video>
        </div>
       <p style="color:black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consequat libero eget magna commodo, quis pharetra tellus pretium. Sed viverra ante in mauris finibus dapibus. Maecenas congue dapibus nulla, eu gravida orci consequat eu. Phasellus nec nunc malesuada, aliquam massa ac, accumsan metus. Fusce sed dignissim lectus. Nunc elit tellus, sollicitudin ac accumsan ut, egestas et dui. Maecenas aliquam est a ligula scelerisque, in aliquam neque sodales. Nullam condimentum euismod dictum. Curabitur non ex elementum, pretium enim ut, ornare ipsum.</p>

       
       
       
       
       
        <!creer formulaire pour que le prof ou l'etudiant se logue>
       
        <div id="idpop"class="popup">
            
            <form action="test.php" method="post"  class="popup-contenu animation">

                <div class="imageprofil">
                    <span  onclick="masquepop();"class="fermer" title="fermer">&times</span>
                    <img src="images/utilisateur.png" class="imgauth">
                </div>

                <div class="contenu">

                    <h2 style="text-align: center;">Ouvrir une session</h2>
                    <label><b>Nom :</b></label>
                    <input  type="text" placeholder="veuillez saisir votre nom..." name="txtnom" required 
                            class="zonetext">
                    </br>
                    <label><b>Mot de passe :</b></label>
                    <input type="password" placeholder="veuillez saisir votre mot de passe"  name="txtpw" required
                           class="zonetext"/>

                    <input type="submit" name="soumettre" value="Soumettre" id="submit" class="submit" >


                    <div clas="contenu">
                        <button onclick="masquepop();" type="button" class="btannuler">Annuler</button>    
                    </div>
                </div>             
            </form>
                               <div class="wrapper">
                               <div class="content">
                                         <h1>
                                            Bonjour et bienvenue Au College Cdi </br> 

                                         </h1>
                                     </div>
                                         </div>
        </div>
       
       
        
        
       
   <!creer formulaire pour que l'etudiant s'inscrive>
       
     <div id="idpop2"class="popup">
         <form  action="test2.php" method="post"  class="popup-contenu animation" >
        
           <div class="imageprofil">
                    <span  onclick="masquepop2();"class="fermer" title="fermer">&times</span>
                    <img src="images/etudiant.png" class="imgauth">
          </div>
           
           
           <div id="contenu">
             
                 
                 <h2 align="center">Créer un nouveau compte...</h2>
                  
                 <label><b>Nom</b></label>
                 <input type="text" name="txtnometud" class="zonetext"placeholder="Entrer nom" required ></input>
               <label><b>Prénom</b></label>
                 <input type="text" name="txtprenometud" class="zonetext"placeholder="Entrer prenom" required ></input>
                <label><b>Nom d'utilisateur</b></label>
                 <input type="text" name="txtuseretud" class="zonetext"placeholder="Entrer un nom d'utilisateur" required ></input>
               <label><b>Mot de passe</b></label>
                 <input type="password" name="passetud" class="zonetext"placeholder="Entrer mot de passe..." required ></input>
               <label><b>Numero de telephone</b></label>
                 <input type="text" name="txtphone" class="zonetext"placeholder="exemple (514)000-0000..." required ></input>
               <label><b>Adresse courriel</b></label>
                 <input type="text" name="txtcourriel" class="zonetext"placeholder="Entrer courriel" required ></input>
             
                 <input type="submit" name="soumettre" value="Soumettre" id="submit" class="submit">
                  <div clas="contenu">
                        <button onclick="masquepop2();" type="button" class="btannuler">Annuler</button>    
                  </div>
             
             </form>
        </div>
       
     </div>
       
       
        <p style="color:black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consequat libero eget magna commodo, quis pharetra tellus pretium. Sed viverra ante in mauris finibus dapibus. Maecenas congue dapibus nulla, eu gravida orci consequat eu. Phasellus nec nunc malesuada, aliquam massa ac, accumsan metus. Fusce sed dignissim lectus. Nunc elit tellus, sollicitudin ac accumsan ut, egestas et dui.
            Maecenas aliquam est a ligula scelerisque, in aliquam neque sodales. Nullam condimentum euismod dictum. 
            Curabitur non ex elementum, pretium enim ut, ornare ipsum.</p>
        <?php
         
if(isset( $_SESSION['loguing']))
{  
    echo $_SESSION['loguing'];
    unset ($_SESSION['loguing']);
}


   ?>
        </main>
    </body>

</html>