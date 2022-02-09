<?php
$title = "challengeCorrezien";
ob_start();
session_start()
?>
<div class="container challengeCorrezien">
    <h1>Challenge Corrézien</h1><br><br>

    <div class="row">
        <div class="col-4">
            <img src="img\Challenge Correzien\image.jpg" alt="">
        </div>
        <div class="col-8">
            <p>Nouveau pour l'année 2018 ! <br>
                Avec la création d'un troisième parcours de Disc Golf dans le département,
                le club a décidé d'en profiter pour mettre en place une petite compétition locale
                : le Challenge Corrézien <br>
                Le nouveau parcours à Egleton, celui de Chamberet ainsi que le parcours des Perrières de
                Brive seront donc les théâtres de ce nouveau challenge !</p>
        </div>
    </div>
    <p>
        L'objectif principal de cette compétition est de faire vivre ces parcours situés à proximité de chez nous.
        A l'avenir, elle pourra s'adapter en fonction de l'implantation d'autres sites, même en dehors du
        département (le nom de Challenge Corrézien pourra alors être amené a changer).
    </p>
    <br>
    <br>
    <hr class="hrSeparator">
    <br>



</div>
<h1 id="titreTab">Tableau de résultat des compétitions</h1><br><br>
<div id="tabChallenge">
    <label for="idCompet" id="labelCompet">Entrer l'ID discgolfmetrix de la compétition</label>&nbsp;&nbsp;
    <input type="text"  id="idCompet">
    <button id="buttonCompet">valider</button>
</div><br><br>
<div class="col-10 m-auto" id="divTable">
    <table id="challenge" class="table table-striped display nowrap " width="100%">
        <thead id="headLine">
           
        </thead>
        <tbody id="colonnes">
     
        </tbody>
    </table>
</div>

<?php
$content = ob_get_clean();
include "baselayout.php";
?>