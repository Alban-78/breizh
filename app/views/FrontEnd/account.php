<?php
include_once "app/views/FrontEnd/layouts/head.php";
include_once "app/views/FrontEnd/layouts/header.php";
?>

<?php 
$usersInfo = new \Projet\controllers\ControllerFront();
$infos = $usersInfo->infos();
?>

<section class="randoshare">

<h1>BIENVENUE SUR VOTRE ESPACE <?= $_SESSION['pseudo'] ?> !</h1>

  
<div class="boussole"><img src="app/public/Images/boussole.png"></div>

<a href="index.php?action=trip"><h3>PARTAGEZ VOS CIRCUITS DE RANDO</h3></a>

<div class="zoom">
<div>
<div><img src="app/public/Images/mapshare.jpg"></div>
</div>
<div>
<div><img src="app/public/Images/shoes.jpg" /></div>
</div>
<div>
<div><img src="app/public/Images/randofree.jpg" /></div>
</div>
</div>

</section>

<div class="button-4">
<a href="index.php?action=modifyPassword">MODIFIER MON MOT DE PASSE</a>
</div>

<div class="button-4">
<a href="index.php?action=deleteUsers&id=<?=$infos['id'] ?>">SUPPRIMER MON COMPTE</a>
</div>


<?php 
    include_once 'app/views/FrontEnd/layouts/footer.php';
    ?>