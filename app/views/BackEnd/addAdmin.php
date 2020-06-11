<?php
include_once "app/views/BackEnd/layouts/headBack.php";
include_once "app/views/BackEnd/layouts/headerBack.php";

?>
<section class="addAdmin">
    <div class="titre-addAdmin">
<h1>AJOUTER UN ADMINISTRATEUR</h1>
    </div>    
<form class="addAdmin" action="indexAdmin.php?action=registerAdmin" method="post">

<?php if (isset($error)) : ?>
    <?= $error ?>
<?php endif ?>

<fieldset>
    <legend>Votre Compte</legend>
    <div class="colonne">
        

        <p><label for="pseudo">Votre Nom:</label>
            <input type="text" name="pseudo" id="pseudo" placeholder="Votre Nom" value="<?php if (isset($_POST["pseudo"])) {
    echo $_POST["pseudo"];
} ?>"></p>

        
        <p><label for="email">Votre Nom:</label>
            <input type="text" name="email" id="email" placeholder="Votre Email" value="<?php if (isset($_POST["email"])) {
    echo $_POST["email"];
} ?>"></p>


        <p><label for="password">Votre Mot de passe:</label>
            <input type="text" name="password" id="password" placeholder="Votre Mot de passe" value="<?php if (isset($_POST["password"])) {
    echo $_POST["password"];
} ?>"></p>


        <p><label for="passwordConfRegister">Confirmation de votre Mot de passe:</label>
            <input type="text" name="passwordConfRegister" id="passwordConfRegister" placeholder="Votre Mot de passe" value="<?php if (isset($_POST["passwordConfRegister"])) {
    echo $_POST["passwordConfRegister"];
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