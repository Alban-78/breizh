<?php
include_once "app/views/BackEnd/layouts/headBack.php";
include_once "app/views/BackEnd/layouts/headerBack.php";

?>


<section id="admin-menu">
        <div class="admin-management">



            <ul>
                <li id="articlesManagement">
                    <img src="app/public/Images/phare.png" alt="phare">
                    <a href="indexAdmin.php?action=articles"><h4>ARTICLES</h4></a>
                    <p>Créer des articles.</p>
                </li>

                <li id="usersManagement">
                    <img src="app/public/Images/superbreton.jpg" alt="superbreton">
                    <a href="indexAdmin.php?action=connected"><h4>NOUVEL ADMINISTRATEUR</h4></a>
                    <p>Ajouter un administrateur.</p>
                </li>

                <li id="messagesManagement">
                    <img src="app/public/Images/korrigantriskell.jpg" alt="korrigantriskell">
                    <a href><h4>MESSAGES UTILISATEURS</h4></a>
                    <p>Gérer les messages des membres du site.</p>

                </li>
                <div class="clear"></div>
            </ul>
        </div>
    </section>








<?php
    include_once 'app/views/BackEnd/layouts/footerBack.php';
    ?>
