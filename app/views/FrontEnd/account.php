<?php
include_once "app/views/FrontEnd/layouts/head.php";
include_once "app/views/FrontEnd/layouts/header.php";

?>
<section class="randoshare">
<h1>BIENVENUE SUR VOTRE ESPACE <?= $infos['pseudo']?></h1>

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




<?php 
    include_once 'app/views/FrontEnd/layouts/footer.php';
    ?>