<body>
    <header>
        <div class="paper">
        </div>
        <div class="title">
        <h1>TRO-VALE<br>BREIZH <span class="black">.</span></h1>
        </div>
        <img src="app/public/Images/drapeau.png" class="drapeau">
        <nav>

            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="index.php?action=heritage">Patrimoine</a></li>
                <li><a href="index.php?action=food">Excursions culinaires</a></li>
                <li><a href="index.php?action=trip">Circuits</a></li>
                <li><a href="#modal1" class="js-modal">S'inscrire</a></li>

                <aside id="modal1" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titlemodal" style="display:none;">

                   <div class="modal-wrapper js-modal-stop">
                       <button class="js-modal-close">Fermer</button>
                    <h1 id="titlemodal">INSCRIPTION</h1>
                <form name="mon-formulaire1" action="page-envoi.html" method="get">
              <p>
                  <input type="radio" name="civi" value="Mme" /> Madame
                  <input type="radio" name="civi" value="Mlle" /> Mademoiselle
                  <input type="radio" name="civi" value="Mr" /> Monsieur
              </p>

               <p>
                 Votre Prénom :<br />
                  <input type="text" name="prenom" value="" />
              </p>
              
              <p>
                 Votre Nom :<br />
                  <input type="text" name="nom" value="" />
              </p>

              <p>
                 Votre Mail :<br />
                  <input type="text" name="nom" value="" />
              </p>


              <p>
                Votre Mot de Passe :<br />
                  <input type="password" name="passe" value="" />
             </p>

             <p>
                Confirmation de votre Mot de Passe :<br />
                  <input type="password" name="confirmpasse" value="" />
             </p>
             <br>
             <p>
                 <input type="submit" value="Envoyer" />
                 <input type="reset" value="Annuler" />
            </p>

                </form>

                </div>
                
                </aside>


            </ul>

        </nav>
    </header>