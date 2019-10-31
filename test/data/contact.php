
<?php
// load the header.php
include'template/header.php';

?>

<br>

<!--Vous allez devoir créer une page "contact.php" qui devra contenir au moins un <h1> et un formulaire simple, avec deux input type="text" et un input type="submit". De surcroît, je vous laisse un peu de temps pour appliquer un CSS minimaliste à votre header et votre footer. -->
<div class=form>
<h1 class=tracking-in-contract-bck>Formulaire 2</h1>

<form class=tracking-in-contract-bck action="data.php"method="POST">
    <div>
        <label for="name">Nom</label>
        <input type="text"id="name"name="name"placeholder= "Votre nom">
    </div>
    <br>
    <div>
        <label for="surname" >Prénom</label>
        <input type="text"id="surname"name="surname"placeholder= "Votre prénom">
    </div>
    <br>
    <div>
        <label for="age" >Age</label>
        <input type="nombre"id="age"name="age"placeholder= "Votre Age"size="3">
    </div>
    <br>
    <div>
        <label for="pets" >Animal de compagnie</label>
        <input type="text"id="pets"name="pets"placeholder= "Votre Animal de compagnie">
    </div>
    <br>
    <div>
        <label for="food" >Repas</label>
        <input type="text"id="food"name="food"placeholder= "Votre Repas">
    </div>
    <br>
    <div>
        <input class="submit"type="submit">
    </div>
</form>
</div>
<?php
// load the footer.php
include'template/footer.php';
?>