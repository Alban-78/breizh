<?php
include_once "app/views/FrontEnd/layouts/head.php";
include_once "app/views/FrontEnd/layouts/header.php";

?>

<section id="main-image2" alt="st-anne-d'auray">
        <div class="paper">
            <h2>Bienvenue en<br><strong>Bretagne</strong></h2>
            <a href="index.php?action=trip" class="button-1">Randonnée</a>
        </div>
    </section>


    <div class="heritage">
        <section class="historic">
            <h3>PATRIMOINE HISTORIQUE ET NATUREL</h3>
                <?php foreach ($articles as $article): ?>
                  
                        <article>
                        
                            <img src=<?= $article['image']?> alt="">
                            <h1><?= $article['title']?></h1>
                            <h4><?= $article['pseudo']?></h4>
                            <p><?= $article['content']?></p>
                            
                           <!-- <a href="article.php?id=<?= $item['ID']?>">Lire l'article</a> -->
                        </article>
                    
                    <?php endforeach ?>


           
        </section>

    </div>




    <?php
    include_once 'app/views/FrontEnd/layouts/footer.php';
    ?>