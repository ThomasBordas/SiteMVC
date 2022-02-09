<?php
$title = "equipement";
ob_start();
session_start()
?>
<div class="container equipement">
    <h1>Le matériel du Disc Golfeur</h1><br>
    <div class="blockMateriel">
        <div class="col-12">
            <h3>Les disques</h3>
            <p>Il existe une multitude de disques qui ont différentes caractéristiques:
                on distingue tout d'abord les drivers (longue distance), les mid-ranges et enfin les putters
                pour le coup final. Mais selon les caractéristiques du parcours, on peut aussi choisir
                des discs qui vont sur la gauche ou bien alors sur la droite, chaques discs à une "courbe"
                différente. Si on a peur de mettre un disc dans l'eau on peut toujours utiliser un disc flottant.
                Un disc a aussi un poids variable (généralement entre 150 et 180 grammes sauf exceptions).
                Les prix des disques varient de 8€ (qualité basique) à 15€ (haute qualité).</p>
        </div>
        <div>
            <div class="d-flex justify-content-center ">
                <div class="row parcoursBis align-items-center">
                    <div class="col-5">
                        <img src="img\matériel\image.jpg" alt="">
                    </div>
                    <div class="col-6 modeleDisques">
                        <h4>De haut en bas </h4>
                        <ul>
                            <li><strong><span> Un putter</span> </strong></li>
                            <li><strong><span> Un mid-range</span> </strong></li>
                            <li><strong><span> Un driver</span></strong> </li>
                        </ul>
                    </div>
                </div>
            </div><br>
        </div>
    </div><br><br>
    <div class="blockMateriel">
        <div class="col-12">
            <h3>Les corbeilles</h3>
            <p>On distingue au disc golf différents types de corbeilles que l'on peut diviser en 2 catégories:</p>
        </div>

        <div id="carouselCorbeilles" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active  ">
                    <div class="d-flex justify-content-center ">
                        <div class="row align-items-center">
                            <div class="col-5 imgCorbeilles">
                                <img src="img\matériel\image (4).jpg" alt="">
                            </div>
                            <div class="col-6 corbeillesInfo">
                                <p>Les corbeilles fixes: Elles sont destinées à des parcours permanents.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item  ">
                    <div class="d-flex justify-content-center ">
                        <div class="row align-items-center">
                            <div class="col-1"></div>
                            <div class="col-4 imgCorbeilles">
                                <img src="img\matériel\image (2).jpg" alt="">
                            </div>
                            <div class="col-5 corbeillesInfo">
                                <p>Les corbeilles portables:
                                    Elles sont faites en toile et sont destinées à
                                    des parcours temporaires par exemple pour des démonstrations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselCorbeilles" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselCorbeilles" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><br>
    </div><br><br>
    <div class="blockMateriel">
        <div class="col-12">
            <h3>Les marqueurs</h3><br>
        </div>
        <div class="col-12">
            <div class="d-flex justify-content-center ">
                <div class="col-5 d-flex justify-content-center">
                    <img src="img\matériel\image (3).jpg" alt="">
                </div>
                <div class="col-7 marqueurDef">
                    <p>Les marqueurs, ou "minis", sont des sortes de disques de petite taille.
                        Ils servent à marquer l'emplacement de son disque. Il suffit de le poser juste
                        devant son disque avant d'effectuer son coup suivant.
                        En loisirs ils ne sont pas forcement nécessaire. Par contre il est vivement conseillé
                        d'en avoir un avec soi en compétition.</p>
                </div>

            </div>
        </div><br>
    </div><br><br>
    <div class="blockMateriel">
        <div class="col-12">
            <h3>Les sacs</h3><br>
        </div>
        <div class="col-12">
            <div class="d-flex justify-content-center ">

                <div class="col-5 imgSacs d-flex justify-content-center">
                    <img src="img\matériel\image (1).jpg" alt="">
                </div>
                <div class="col-7 sacsDef">
                    <p>Il existe des sacs spécifique pour le disc golf. Différentes tailles sont disponible
                        selon le nombre de disques que vous possédez (une capacité de 8 disques pour les petits
                        sacs et jusqu'à 30 pour les plus grands).
                        Comme le montre la photo ces sacs sont adaptés pour les discgolfeurs, avec des rangements
                        (pour la fiche de scores, le marqueur, la bouteille d'eau...) et de quoi attacher des
                        bretelles.</p>
                </div>
            </div>
        </div><br>
    </div>

</div>

<?php
$content = ob_get_clean();
include "baselayout.php";
?>