<?php
$title = "infosCalendrier";
ob_start();
session_start()
?>
<div class="container infosCalendrier">

    <p>Le Disc Golf est un sport aussi de compétition. De grands événements internationaux sont
        organisés pour les meilleurs joueurs, qui sont d'ailleurs pour la plupart des professionnels.
        En France, deux fédérations se partagent les compétitions nationales :</p>
    <ul>
        <li> La FNSMR - Fédération National du Sport en Milieu Rural : Elle est la fédération historique pour le développement du disc golf.</li>
        <li> La FFDF - Fédération Flying Disc France : Il s'agit de la fédération d'ultimate (et autres sports de disques volants) qui a intégré le disc golf.</li>
    </ul>

    <p>Il existe également des compétitions régionales. Depuis 2008, le club briviste participe activement au Sud Ouest Tour en organisant chaque année une ou plusieurs manches.</p>
    <br><br>
    <div class="row justify-content-around">
        <div>
            <h3>Competitions de la FNSMR</h3>
            <a href="https://www.disc-golf.fr/competitions-nationales-regionales-guide-dorganisation-des-competitions-fnsmr.html" target="_blank"><img src="img\Competitions\1609423423.gif" alt="" width="450px" height="450px"></a>
        </div>
        <div>
            <h3>Competitions de la FFDP</h3>
            <a href="https://www.ffdf.fr/calendrier-discgolf/" target="_blank"><img src="img\Competitions\1609423423.jpg" alt="" width="450px" height="450px"></a>
        </div>

    </div>

</div>
<?php
$content = ob_get_clean();
include "baselayout.php";
?>