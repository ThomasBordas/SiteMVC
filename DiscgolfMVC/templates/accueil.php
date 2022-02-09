<?php
$title = "accueil";
ob_start();
session_start()
?>

<div class="container row">

    <!-- page d'accueil partie gauche -->
    <div class="col-8" id="accueilLeft">
        <h1>Bienvenue sur le site du Disc Golf Briviste !</h1>
        <br>
        <hr id="hrLeft">
        <br>
        <h2>Dernières news</h2>
        <!-- TODO Lire une variable correspondant à un texte entré par l'admin -->
        <br>
        <br>
        <hr id="hrLeft">
        <br>
        <h2>Nouvelle signalétique sur notre parcours</h2>
        <p>20 panneaux de départ, un grand plan à l'entrée nord des Perrières et un plus petit à l'entrée sud ont été installés</p>
        <img src="img\1624870897.jpg" alt="" width="100%">
    </div>

    <!-- page d'accueil partie droite -->
    <div class="col-4" id="accueilRight">
        <h2>A venir</h2>
        <h3>3 Octobre , Challenge Corrézien à Brive , 10 Octobre Sud-Ouest Tour à Brive.</h3>
        <br>
        <hr id="hrRight">
        <br>
        <h2>Entraînements</h2>
        <p>Rendez-vous tous les dimanches matin de 10h à 12h30 au parc des Perrières à Brive (entraînements maintenus durant les vacances).</p>
        <p>Initiations gratuites avec prêt de disques pour les personnes souhaitant découvrir notre discipline</p>
        <br>
        <hr id="hrRight">
        <br>
        <h2>Notre fil d'actualité Facebook</h2>
        <div class="fb-page" data-href="https://www.facebook.com/discgolfperrieres" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/discgolfperrieres" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/discgolfperrieres">Parcours de Disc Golf des Perrières - Disc Golf Briviste</a></blockquote></div>
        <br>
        <hr id="hrRight">
        <br>
        <h2>Que pensez vous de notre parcours ?</h2>
        <a href="https://www.dgcoursereview.com/course.php?id=4375" target="_blank"><img src="img\notes\4375.png" alt="DGCourseReview"></a>
        <br>
        <hr id="hrRight">
        <br>
    </div>
</div>



<?php
$content = ob_get_clean();
include "baselayout.php";
?>