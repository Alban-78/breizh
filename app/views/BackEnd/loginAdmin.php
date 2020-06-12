<?php
include_once "app/views/BackEnd/layouts/headBack.php";
include_once "app/views/BackEnd/layouts/headerBack.php";

?> 


<h3>ESPACE ADMINISTRATEUR</h3>
<section class="connectAdmin">
    <div class="titre-connectAdmin">
<h1>SE CONNECTER</h1>
    </div>    
<form class="loginAdmin" action="indexAdmin.php?action=connected" method="post">

<?php if (isset($error)) : ?>
    <?= $error ?>
<?php endif ?>

<fieldset>
    <legend>Votre Compte</legend>
    <div class="colonne">
        

        <p><label for="connectNameAdmin">Votre Nom:</label>
            <input type="text" name="connectNameAdmin" id="connectNameAdmin" placeholder="Votre Nom" value="<?php if (isset($_POST["connectNameAdmin"])) {
    echo $_POST["connectNameAdmin"];
} ?>"></p>


        <p><label for="connectPasswordAdmin">Votre Mot de passe:</label>
            <input type="password" name="connectPasswordAdmin" id="connectPasswordAdmin" placeholder="Votre Mot de passe" value="<?php if (isset($_POST["connectPasswordAdmin"])) {
    echo $_POST["connectPasswordAdmin"];
} ?>"></p>


        
    </div>
    <p>
                 <input type="submit" value="Envoyer" />
                 <input type="reset" value="Annuler" />
    </p>


</fieldset>
</form>
</section>

<?php
    include_once 'app/views/BackEnd/layouts/footerBack.php';
    ?>

