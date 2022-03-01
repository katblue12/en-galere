<?php
session_start();
include_once './headers/myAccountHeader.php';
?>
<h1>My Account</h1>
<section>
    <!-- table i need thank you to my little god as i am the demigod who choseth himeth 
think about what you want show account in table button to modify then into a form
go to a form with old email and new email in php do a comparison with the bdd
and only update the info onthe bdd id the condition is met -->
<div>
    <form action="" method="post">
        <!-- signup.inc.php.inc means the file is included but the user doesn't see it -->

        <label for="Nom de Famille">Surname </label>
        <input type="text" name="Nom de Famille" value="<p><?php $_SESSION['surnameuser']?></p>">
        
        <label for=Prenom>Prenom</label>
        <input type="text" name="Prenom">

        <label for="Adresse Mail">Email</label>
        <input type= "text" name="email">  

        <label for="Telephone">Telephone</label>
        <input type= "number" name="telephone"> 

        <label for="Choisir MDP">Mot de Passe</label>
        <input id="one" type="password" name="choisirMotDePasse"> 
    </div>
    <div>

        <label for="adresse1">Adresse 1</label>
        <input type="text" name="Adresse1">

        <label for="adresse2">Adresse 2</label>
        <input type="text" name="Adresse2">

        <label for="ville">Ville</label>
        <input type="text" name="ville">

        <label for="code_postal">code postal</label>
        <input type="number" name="codePostal">

        <label for="Confirmer MDP">Confirmer Mot de Passe</label>
        <input id="two" type="password" name="confirmerMotDePasse">
    
  
        <button type="button" id="changer">View Password</button>
        <button type="button" id="changeback"> hide Password</button>
        </div>
    
    </section>
    <section>
        <button type="submit" name="submit" class="form_button_send">Save Changes</button>
    </form>
</section>
  

<?php include_once './headers/footer.php';
?>