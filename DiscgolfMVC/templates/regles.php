<?php
$title = "regles";
ob_start();
session_start()
?>
<div class="container regles">
    <h1>Déroulement d'une partie</h1>
    <br>
    <br>
    <p id="stRegle">Le principe du disc golf est similaire à celui du golf classique :</p>
    <br>
    <ul>
        <li> Les joueurs vont au départ de la corbeille n°1.</li>
        <li> Ils lancent chacun leur tour un disque en direction de la corbeille.</li>
        <li> Le joueur le plus loin de la corbeille joue son second coup (il peut si il veut rejouer avec le même disque ou non) à l'endroit où son disque précèdent est arrivé.</li>
        <li> Une fois le disque lancé on regarde de nouveau qui est le plus loin de la corbeille et ainsi de suite. Peu importe qui a fait le moins de coups.</li>
        <li> Une corbeille est finie pour un joueur dès qu'il a réussie à faire rentrer son disque dans la corbeille (la toucher ne suffit pas).</li>
        <li> Une fois que tous les joueurs ont réussie à faire rentrer leur disque dans la corbeille ils comptent chacun leurs points (correspond au nombre de lancer nécessaire pour atteindre l'arrivée en y ajoutant les éventuelles pénalités valant chacune un point).</li>
        <li> Les joueurs passent ensuite à la corbeille n°2 et ainsi de suite.</li>
        <li> Une fois le parcours fini les joueurs comptent le total de leurs points. C'est le joueurs qui en a le moins que remporte la partie.</li>
    </ul>

    <br>
    <br>
    <hr class="hrSeparator">
    <br>

    <div class="row">
        <div class="col-5 titreRegle2">
            <h2>Modèle classique d'un trou de Disc Golf</h2>
        </div>
        <div class="col_7">
            <img src="img\image (2).png" alt="">
        </div>
    </div>

    <br>
    <br>
    <hr class="hrSeparator">
    <br>

    <h1>Les règles officielles</h1><br>
    <br>
    <div class="regleOfficielle">       
        <embed src="img\regles_pdga.pdf" width=800 height=750 type='application/pdf' />
    </div>

</div>

<?php
$content = ob_get_clean();
include "baselayout.php";
?>