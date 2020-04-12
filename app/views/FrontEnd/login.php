<?php
include_once "app/views/FrontEnd/layouts/head.php";
include_once "app/views/FrontEnd/layouts/header.php";

?>


<section class="connection">
    <div class="titre-connect">
<h1>SE CONNECTER</h1>
    </div>    
<form class="connect" action="index.php?action=login" method="post">

<?php
        if(isset($errors)) :
        if($errors) :
        foreach($errors as $error) :
        ?>

            <div class="row">
                <div>
                    <div class="message erreur"><?= $error ?></div>
                </div>
            </div>

            <?php
             endforeach;
             else :
            ?>

<div class="row">
                <div>
                    <div class="message confirmation">Vous ête connecter !</div>
                </div>
            </div>


            <?php
            endif;
            endif
            ?>

<fieldset>
    <legend>Votre Compte</legend>
    <div class="colonne">
        

        <p><label for="name">Votre Nom:</label>
            <input type="text" name="name" id="connectName" placeholder="Votre Nom" value="<?php if(isset($_POST["connectName"]))echo $_POST["connectName"] ?>></p>


        <p><label for="password">Votre Mot de passe:</label>
            <input type="text" name="password" id="connectPassword" placeholder="Votre Mot de passe" value="<?php if(isset($_POST["connectPassword"]))echo $_POST["connectPassword"] ?>></p>


        
    </div>
    <p>
                 <input type="submit" value="Envoyer" />
                 <input type="reset" value="Annuler" />
    </p>


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