<?php
// load the header.php
include"template/header.php";

?>
<div >
<h1 class=tracking-in-contract-bck> Inscription</h1>
<br>
<div class=form>
<h1 class=tracking-in-contract-bck>Formulaire</h1>

<form class=tracking-in-contract-bck action="data.php"method="POST">
    
    <div>
        <label for="name">Nom:</label>
        <input type="text"id="user_name"name="user_name"placeholder= "Votre nom"required>
    </div>
    <br>
    <div>
        <label for="favorite_color" >Couleur favorite:
        <input type="checkbox"id="favorite_color"name="favorite_color"placeholder= "Votre couleur favorite"required>
    </div>
    <br>
    <div>
        <label for="email">Email:</label>
        <input type="email"id="email"name="email"placeholder= "Votre email"required>
    </div>
    <br>
    <div>
        <label for="sex">Sexe:</label>
        <input type="select"id="sex"name="sex"placeholder= "Votre sexe"required>
    </div>
    <br>
    <div>
        <label for="passeword">Mot de passe:</label>
        <input type="passeword"id="passeword"name="passeword"placeholder= "Votre mot de passe"required>
    </div>
    <br>
    <div>
        <input class="submit"type="submit">
    </div>
</form>
</div>


</div>
<?php

// load the footer.php
include'template/footer.php';
