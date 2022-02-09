<?php
$title = "parcours";
ob_start();
session_start()
?>
<div class="container parcours">
    <div id="proxi">
        <h2>Parcours à proximité</h2>
        <br>
        <!-- ------------Carousel des parcours à proximité------------ -->
        <div id="carouselParcours" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active parcoursProxi ">
                    <div class="d-flex justify-content-center ">
                        <div class="row parcoursBis align-items-center">
                            <div class="col-5">
                                <img src="img\autres parcours\Chamberet.jpg" alt="">
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-6 parcoursInfo">
                                <h4>Arboretum de Chamberet</h4>
                                <ul>
                                    <li><strong><span> Localisation :</span> </strong> Chamberet (Corrèze).</li>
                                    <li><strong><span> Parcours:</span> </strong>9 corbeilles niveau "loisir".</li>
                                    <li><strong><span> Caractéristiques:</span></strong> Parcours en accès libre toute l'année. Location de disques sur place d'avril à septembre (4€ adultes et 2€ - de 12 ans)</li>
                                </ul>
                                <div class="parcoursAdresse">
                                    <strong><a title="http://chamberet-sports-nature.jimdo.com/" href="http://chamberet-sports-nature.jimdo.com/" target="_blank" rel="noopener">Site internet Chamberet Sports Nature</a></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item  parcours ">
                    <div class="d-flex justify-content-center ">
                        <div class="row parcoursBis align-items-center">
                            <div class="col-5 imgParcours">
                                <img src="img\autres parcours\colorado.jpg" alt="">
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-6 parcoursInfo">
                                <h4>Complexe hôtelier du Colorado</h4>
                                <ul>
                                    <li><strong><span> Localisation :</span> </strong> Egletons (Corrèze).</li>
                                    <li><strong><span> Parcours:</span> </strong>6 corbeilles niveau "loisir".</li>
                                    <li><strong><span> Caractéristiques:</span></strong> Parcours payant dans le parc du complexe hôtelier. Location de disques sur place.</li>
                                </ul>
                                <div class="parcoursAdresse">
                                    <strong><a href="https://www.facebook.com/ColoradoSARL/" target="_blank" rel="noopener"><span style="text-decoration: underline;"><strong>Lien FaceBook</strong></span></a></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item  parcours ">
                    <div class="d-flex justify-content-center ">
                        <div class="row parcoursBis align-items-center">
                            <div class="col-5" id="imgThenon">
                                <img src="img\autres parcours\Thenon.jpg" alt="">
                            </div>
                            <div class="col-1">
                            </div>
                            <div class="col-6 parcoursInfo">
                                <h4>L'Appel de la fôret </h4>
                                <ul>
                                    <li><strong><span> Localisation :</span> </strong> L'Appel de la fôret </li>
                                    <li><strong><span> Parcours:</span> </strong>12 corbeilles niveau débutant.</li>
                                    <li><strong><span> Caractéristiques:</span></strong> Parcours payant en bas d'un accrobranche. Location de disques sur place.</li>
                                </ul>
                                <div class="parcoursAdresse">
                                    <strong><a href="https://www.appel-de-la-foret.com/" target="_blank" rel="noopener">Site Internet</a></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselParcours" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselParcours" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- ------------Carousel des parcours à proximité END------------ -->
        <br>
        <br>
        <hr class="hrSeparator">
        <br>
        <div id="conditionsInstall">
            <h2>Conditions d'installation d'un parcours de Disc Golf.</h2><br>
            <p> Les terrains propices à l'implantation d'un parcours de Disc Golf sont nombreux.
                Un parcours doit juste respecter quelques critères:</p>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <table>
                        <tr>
                            <td><br>
                                <span>- <strong>Disposer d'un terrain de plusieurs hectares.</strong> La surface
                                    varie de 3 à 30 hectares selon le nombre de corbeilles que l'on souhaite mettre et
                                    e public visé. (Parcours pour des compétitions ou au contraire pour des débutants).</span>
                            </td>
                        </tr>
                        <tr>
                            <td><br>
                                <span>- <strong>Ne pas être trop en pente.</strong> Cela concerne surtout les espaces avec une
                                    pente uniforme sur tout le parcours. En revanche, un relief bien utilisé
                                    peut être bénéfique pour obtenir un parcours original et sympathique</span>
                            </td>
                        </tr>
                        <tr>
                            <td><br>
                                <span>- <strong>Avoir une bonne proportion d'arbres.</strong> Cet élément naturel est très important
                                    au Disc Golf. Ils sont presque obligatoires sur un parcours. Ils permettent
                                    d'avoir des obstacles et un cadre de jeu agréable.
                                    Par contre il faut tout de même éviter les parcours trop dense en végétation.
                                    Chaque trous doit avoir un passage pour éviter que cela devienne "une loterie".
                                    Un bon parcours est un parcours varié. Il peut y avoir quelques corbeilles avec
                                    rès peu de végétation et à l'inverse cela n'est pas grave si il y a quelques trous
                                    vec beaucoup d'arbres.</span>
                            </td>
                        </tr>
                        <tr>
                            <td><br>
                                <span>-<strong> Et surtout un parcours doit être entretenu de façon à pouvoir retrouver son
                                        disque assez facilement.</strong> L'entretien reste tout de même beaucoup moins cher que
                                    sur un golf. Un parc classique fait tout à fait l'affaire pour ça. 
                                    Un entretien de type différencié est aussi possible à condition tout de même
                                    d'éviter d'avoir une surface en hautes herbes trop importante sur le fairway. <br>&nbsp;</span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <br>
        <hr class="hrSeparator">
        <br>
        <div>
            <h2>Différents parcours en France</h2><br>
            <!-- Utilisation de balise iframe pour affiche la map -->
            <div id="mapParcoursFR">
                <iframe src="https://www.google.com/maps/d/embed?mid=1ak2BCrx8izkqqKVLQzkshCScZvi-LO6j" width="640" height="480"></iframe>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include "baselayout.php";
?>