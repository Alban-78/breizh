<?php
include_once "app/views/FrontEnd/layouts/head.php";
include_once "app/views/FrontEnd/layouts/header.php";

?>


<section id="main-image">
        <div class="paper">
            <h2>Bienvenue en<br><strong>Bretagne</strong></h2>
            <a href="index1.html" class="button-1">Par ici</a>
        </div>
    </section>

    <section id="stages">
        <div class="paper">
            <ul>
                <li id="stage-1">
                    <img src="app/public/Images/korriganpapier.jpg">
                    <h4>Planifier</h4>
                    <p>Confiez-nous vos rêves d’évasion : en famille ou entre amis, nous trouverons le circuit qui
                        comblera vos attentes.</p>
                </li>

                <li id="stage-2">
                    <img src="app/public/Images/korrigantableau.jpg">
                    <h4>Organiser</h4>
                    <p>Bénéficiez de l’expertise de nos spécialistes de chaque destination, ils vous accompagnent dans
                        la réalisation de votre voyage.</p>
                </li>

                <li id="stage-3">
                    <img src="app/public/Images/korrigantableauprofil.jpg">
                    <h4>Voyager</h4>
                    <p>Nous nous chargeons d’assurer votre sécurité et de veiller à votre pleine sérénité tout au long
                        de votre voyage.</p>

                </li>
                <div class="clear"></div>
            </ul>
        </div>
    </section>

    <section id="alternative">
        <div class="paper">
            <article style="background-image: url(app/public/Images/pharepetitminou.jpg);">
                <div class="cover">
                    <h4>Partez en famille</h4>
                    <p><small>Offrez le meilleur à ceux que vous aimez et partagez des moments fabuleux !</small></p>
                    <a href="#" class="button-2">Plus d'infos</a>
                </div>

            </article>



            <article style="background-image: url(app/public/Images/quiberon2.jpg);">
                <div class="cover">
                    <h4>Envie de s'evader</h4>
                    <p><small>Parfois un peu d’évasion serait le bienvenue et ferait le plus grand bien !

                        </small></p>
                    <a href="#" class="button-2">Plus d'infos</a>
                </div>

            </article>
            <div class="clear"></div>

        </div>
    </section>

    <section id="contact">
        <div class="paper">
            <h3>Contactez-Nous</h3>
            <p>Chez Breizh nous savons que voyager est une aventure humaine mais également un engagement
                financier important pour vous. C’est pourquoi nous mettons un point d’honneur à prendre en compte
                chacune de vos attentes pour vous aider dans la préparation de votre séjour, circuit ou voyage sur
                mesure.</p>
        </div>
        
        <form>
            <label for="name">Nom</label>
            <input type="text" id="name" placeholder="Votre Nom">

            <label for="email">Email</label>
            <input type="text" id="email" placeholder="Votre Email">
            
            <label for="objet">Objet:</label>
            <input type="text" name="objet" id="objet" placeholder="Objet Message">
            
              <br><br><br>
            <p><label for="message">Votre Message:</label> </p>
                <p><textarea rows="10" cols="80" name="message" id="message" placeholder="votre message"></textarea></p>
               
            <input type="submit" value="OK" class="button-3">

        </form>
    </section>

    <?php 
    include_once 'app/views/FrontEnd/layouts/footer.php';
    ?>