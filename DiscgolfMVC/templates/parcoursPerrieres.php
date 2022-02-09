<?php
$title = "parcoursPerrieres";
ob_start();
session_start()
?>
<div class="container parcoursPerrieres">

    <div class="col-12">
        <h1>Parc des Perrières</h1>
        <br><br>
        <h3>Localisation :</h3>
        <p> Brive est une ville de Corrèze, située à proximité du Périgord et du Quercy.
            Le parcours des Perrières (gratuit) se trouve à proximité de la gare SNCF.
            Il est également rapidemment accessible depuis l'autoroute A20.</p>
    </div><br>
    <div class="d-flex justify-content-center">
        <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15916.579875636584!2d1.5159703969654448!3d45.
        153070358164086!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3786b481fb2270de!2sParcours%20de%20Disc%20Golf%
        20des%20Perri%C3%A8res!5e0!3m2!1sfr!2sfr!4v1633018130528!5m2!1sfr!2sfr" width="600" height="450" allowfullscreen="allowfullscreen"></iframe>
    </div>
    <br>
    <br>
    <hr class="hrSeparator">
    <br>
    <div class="col-12">
        <h3>Avis aux joueurs:</h3><br>
        <p>Le parc des Perrières est avant tout un espace de plein air où se côtoient promeneurs,
            joggeurs, vélos... Les joueurs sont priés de faire attention au public et de respecter
            la pratique des autres activités. Il est conseillé de jouer à plusieurs afin de pouvoir spotter
            (surveiller) ou bien de venir à des heures où le parc est peu fréquenté (le matin ou en semaine). <br>
            Merci de votre vigilance.</p>
    </div>
    <br>
    <br>
    <hr class="hrSeparator">
    <br>
    <div class="col-12">
        <h3>Plan du parcours :</h3><br>
        <div class="d-flex justify-content-center">
            <img src="img\Parcours des Pèrrieres\image.png" alt="">
        </div>
    </div>
    <br>
    <br>
    <hr class="hrSeparator">
    <br>
    <div>
        <h3>Les installations</h3><br><br>
        <div>
            <div id="carouselInsta" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active  ">
                        <div class="d-flex justify-content-center ">
                            <div class="row align-items-center">
                                <div class="col-5 ">
                                    <img src="img\Parcours des Pèrrieres\image (1).jpg" alt="">
                                    <p>9 corbeilles latitude 64 <br>(installation septembre 2015)</p>
                                </div>
                                <div class="col-2"></div>
                                <div class="col-5 ">
                                    <img src="img\Parcours des Pèrrieres\image (10).jpg" alt="">
                                    <p>9 corbeilles innova discatcher <br>(installation juin 2013)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item  ">
                        <div class="d-flex justify-content-center ">
                            <div class="row align-items-center">

                                <div class="col-5 ">
                                    <img src="img\Parcours des Pèrrieres\image (2).jpg" alt="">
                                    <p>18 planches de départ <br>(installation août 2015)</p>
                                </div>
                                <div class="col-2"></div>
                                <div class="col-5 ">
                                    <img src="img\Parcours des Pèrrieres\image.jpg" alt="">
                                    <p>18 panneaux de départ <br>
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselInsta" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselInsta" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><br>
        </div>

    </div>
</div>

<?php
$content = ob_get_clean();
include "baselayout.php";
?>