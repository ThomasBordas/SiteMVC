<?php
$title = "achatLoc";
ob_start();
session_start()
?>
<div class="container achatLoc">
    <div class="col-12">
        <h2>Location de disques à l'office de tourisme</h2><br>
        <div class="row justify-content-center align-items-center">
            <div class="col-6">
                <p style="font-size: larger;">A comptez du 1er Février 2018, l'office de tourisme de Brive propose la location de disques
                    pour la pratique du Disc Golf. <br><br>
                    L'office de tourisme vous remettra un flyer comprenant une notice explicative du disc golf,
                    un plan pour se rendre au parc des Perrières, un plan du parcours de disc golf et une carte des
                    scores. <br><br>
                    Le prix de la location est pour l'instant fixé à 3€ par disques
                    (+ une caution de 10 € par disques)</p>
            </div>
            <div class="col-5">
                <img src="img\Achat_loc\image (10).jpg" alt="">
            </div>
        </div>
    </div>
    <br>
    <br>
    <hr class="hrSeparator">
    <br>
    <div class="col-12 ">
        <h2>Où acheter des disques ?</h2><br>
        <div class="row">
            <div class="col-6 achatWhere">
                <h4>Via Internet:</h4><br>
            
                <p style="text-align: justify;">En France il n'existe pas encore de magasins qui vendent de
                    disques pour le disc golf. Le meilleur moyen est de les commander sur internet sur le site 
                    <a style="color: #f9f924;" href="http://www.hole19.fr/" target="_blank" rel="noopener">
                        www.hole19.fr/</a>. Il s'agit d'un site français qui vous permettra de faire
                    vos achats avec plus defacilité.
                </p>
                <p style="text-align: justify;">Des disques et des kits pour débutants sont aussi proposés sur le
                    site
                    de <a style="color: #f9f924;" title="https://www.decathlonpro.fr/sports-outdoor-loisirs/sports-precision/golf.html" href="https://www.decathlonpro.fr/sports-outdoor-loisirs/sports-precision/golf.html" target="_blank" rel="noopener">DecathlonPro</a>.</p>
            </div>
            <div class="col-1"></div>
            <div class="col-5 achatImg">
                <a href="https://www.decathlonpro.fr/sports-outdoor-loisirs/sports-precision/golf.html" target="_blank" rel="noopener">
                    <img src="img\Achat_loc\171121_decathlonpro.png" target="_blank" rel="noopener" alt="">
                    <hr>
                    <a href="http://www.hole19.fr/" target="_blank"><img src="img\Achat_loc\image.png" alt=""></a>
                </a>
            </div>
        </div><br>
        <div>
            <p>L'achat de disques peut aussi se faire lors de commandes groupées effectuées au sein du club
                afin de faire diminuer les frais de port par disque.</p>
        </div>
    </div>
    <br>
    <br>
    <hr class="hrSeparator">
    <br>
    <div id="achatClub">
        <h4>En vente au club:</h4><br>
        <p>Le club vend quelques uns disques d'occasions afin de vous offrir la possibilité de vous équiper
            sans faire d'achat en ligne et à prix réduit. <br><br>
            Pour acheter un ou plusieurs disques il suffit de nous contacter au 06 67 61 26 91 (Thomas Peyre).
            Vous pouvez bien sûr me demander plus d'informations ou des conseils, notamment pour savoir quels
            sont les disques conseillés pour les débutants. <br><br>
            Nous ne faisons pas de livraisons et la vente se fait juste de main à main sur Brive, de préférence
            au parc des Perrières pour vous donner la possibilité de tester plusieurs disques avant de faire
            votre choix.</p>
    </div>



</div>

<?php
$content = ob_get_clean();
include "baselayout.php";
?>