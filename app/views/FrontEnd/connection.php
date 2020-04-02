<?php
include_once "app/views/FrontEnd/layouts/head.php";
include_once "app/views/FrontEnd/layouts/header.php";

?>


<section class="connection">
<h1>SE CONNECTER</h1>
<form class="contact" action="traitement.php" method="post">

<fieldset>
    <legend>Votre Compte</legend>
    <div class="colonne">
        

        <p><label for="mail">Votre Email:</label>
            <input type="text" name="mail" placeholder="Votre Email"></p>


        <p><label for="password">Votre Mot de passe:</label>
            <input type="text" name="password" placeholder="Votre Mot de passe"></p>


        
    </div>


</fieldset>
</form>

<div class="container">
    <div id="slider">
        <ul class="slides">
            <li class="slide"><img src="app/public/Images/drapeau2.jpg"></li>
            <li class="slide"><img src="app/public/Images/auray.jpg"></li>
            <li class="slide"><img src="app/public/Images/stmalo.jpg"></li>
            <li class="slide"><img src="app/public/Images/plougrescant.jpg"></li>
            <li class="slide"><img src="app/public/Images/quiberon.jpg"></li>
            <li class="slide"><img src="app/public/Images/roscoff.jpg"></li>
        </ul>
    </div>
    </div>
<div class="hermine">
<img src="app/public/Images/hermine.png">
</div>

</section>



<?php
    include_once 'app/views/FrontEnd/layouts/footer.php';
    ?>