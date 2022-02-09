<?php
$title = "presentation";
ob_start();
session_start()
?>
<div class="container presentation">

    <p>Le Disc Golf est un sport de pleine nature. Le principe est le même qu’au golf classique,
        mais à la place d’une balle le discgolfeur utilise un disque (sorte de frisbee) qu’il doit
        envoyer du point de départ jusqu’à l’arrivée en un minimum de coup.</p>
    <br>
    <div id="videoPresentation">
        <iframe width="1008" height="567" src="https://www.youtube.com/embed/lyRFoMOWBfk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <br>
    <hr class="hrSeparator">
    <br>
    <p>Le Disc Golf se veut convivial, ludique et surtout proche de la nature. C’est également un sport peu honnéreux comparé au golf classique.
        La pelouse doit être entretenue juste de manière à pouvoir retrouver son disque.
        Le matériel est à un prix accessible (10€ en moyenne pour un disque sachant que 2 ou 3 disques suffissent pour jouer).</p>

    <p>Né aux Etats-Unis dans les années 60, ce sport n’a cessé de s’accroître dans le monde.
        On compte aujourd’hui plus d’un million de pratiquants et environ 3500 parcours,
        concentrés notamment en Amérique du nord et en Scandinavie.</p>
    <br>
    <br>
    <div id="atlas">
        <h2>Vous pouvez consulter ici l'Atlas mondial du Disc Golf :</h2>
        <a href="https://fr.calameo.com/read/002215225139b28980f2b" target="_blank"><img src="img\p1.jpg" id="imgAtlas" alt="ATLAS"></a>
    </div>
</div>

<?php
$content = ob_get_clean();
include "baselayout.php";
?>