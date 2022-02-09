<?php
$title = "infoAdhesion";
ob_start();
session_start()
?>
<div class="container infoAdhesion">
    <div class="row">

        <div class="col-8">
            <p>
                Le Disc Golf Briviste est né le 9 décembre 2007. A l'origine, le disc golf fut importé à Briviste
                par Martin Peyre après avoir découvert ce sport en Suède durant l'été 2005.
                Il est depuis le président de ce club. <br><br>
                Son principal but est de développer le disc golf dans la région, en s'investissant pour la
                création de parcours permanents et en participant à des manifestations sur le thème du sport. <br><br>
                Nous jouons depuis la création du club au parc des Perrières, sur lequel est désormais installé
                un parcours permanent de 18 corbeilles, reconnu d'ailleurs par de nombreux joueurs pour être
                l'un des meilleurs en France. <br><br>
                Notre association est surtout accès sur une pratique conviviale et adaptée à la volonté de tous
                (jeu libre, entraînements, compétitions).
            </p>
        </div>
        <div class="col-4 align-items-center">
            <img src="img\image.png" alt="">
        </div>
    </div>
    <br>
    <br>
    <hr class="hrSeparator">
    <br>
    <div class="row align-items-center">
        <div class="col-5">
            <img src="img\adhesion\image (8).jpg" alt="" id="imgInfo">
        </div>
        <div class="col-7">
            <p>
                En étant membre de club vous bénéficiez d'une licence FFFD pour être assuré lors des
                compétitions. <br><br>
                Vous pourrez bien sûr aussi profiter de l'ambiance conviviale de nos entraînements
                hebdomadaires (le dimanche matin à 10h15) et des conseils avisés des différents membres du
                club pour pourvoir progresser. <br><br>
                Participez aussi à la vie du club, ses journées de démonstrations, ses compétitions en
                interne, sa fête organisée tous les premiers dimanches de décembre pour son anniversaire. <br><br>
                Bénéficiez d'un covoiturage, parfois gratuit, pour se rendre sur les différents lieux
                de compétition (Gironde, Pays Basques ...). L'adhésion au club vous permettra aussi de
                pouvoir acheter du matériel de disc golf à prix réduit grâce aux commandes groupés.
            </p>
        </div>
    </div>
    <br>
    <br>
    <hr class="hrSeparator">
    <br>
    <div>
        <div class="adhesionPDF">
            <embed src="img\adhesion\adhésion DGB 2019_2020.pdf" width=800 height=750 type='application/pdf' />
        </div>
    </div>
</div>


<?php
$content = ob_get_clean();
include "baselayout.php";
?>