<?php
include_once "app/views/FrontEnd/layouts/head.php";
include_once "app/views/FrontEnd/layouts/header.php";
if(!empty($_POST)){
    $login = new \Projet\controllers\ControllerFront();
    $error = $login->changePassword();
}
?>
<section class="modifyPassword">

        <form id="changePassword" method="post" action="" name="changePassword">
            <?php if(isset($errors)) :
                if($errors):
            foreach($errors as $error) : ?>
             <h3><?= $error ?><h3>
                
            <?php endforeach; else : ?>
                        
            <h3>Votre Mot de Passe a été modifier<h3>
                        
            <?php endif; endif ?>
                <label from="oldPassword">Taper votre ancien mot de passe</label>
                <input id="oldPassword" name="password" type="password" placeholder="Votre ancien mot de passe">   
                <label from="newPassword">Taper votre nouveau mot de passe</label>
                <input id="newPassword" name="newPassword" type="password" placeholder="Votre nouveau mot de passe">
                <label from="verifyNewPassword">Confirmer votre nouveau mot de passe</label>
                <input id="verifyNewPassword" name="verifyNewPassword" type="password" placeholder="Confirmer le mot de passe">
                <div class="buttonSettings">
                    <button type="submit">Modifier</button>
                    <button type="reset">Annuler</button>
                </div>
            </form>
</section>

<?php 
    include_once 'app/views/FrontEnd/layouts/footer.php';
    ?>