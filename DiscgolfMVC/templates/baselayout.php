<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css\styleBaselayout.css">
  <link rel="stylesheet" type="text/css" href="css\style.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');
  </style>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');
  </style>
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <script src="https://kit.fontawesome.com/2d4ff18472.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.11.0/r-2.2.9/sp-1.4.0/datatables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.11.0/r-2.2.9/sp-1.4.0/datatables.min.js"></script>
  <div id="fb-root"></div>


</head>

<body class="container">
  <div class="main">
    <div id="contenu">

      <!-- =============================Menu ===> Barre de navigation====================== -->
      <div class="sticky-top ">
        <nav class="navbar navbar-expand-lg ">
          <a class="navbar-brand" href="index.php?action=accueil"><img src="img\image.png" width="30" height="30" class="d-inline-block align-top" alt=""> Accueil</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="Pdiscgolf" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Le Disc Golf
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="index.php?action=presentation">Présentation</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="index.php?action=regles">Les règles</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="index.php?action=parcours">Les parcours</a>
                  <div class="dropdown-divider"></div>

                  <!-- Sous liens s'affichent à droite de l'onglet -->
                  <div class="dropright">
                    &nbsp; <button class="btn  dropdown-toggle" data-toggle="dropdown">Matériel</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="index.php?action=equipement">Equipement</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="index.php?action=achatLoc">Achat/Location</a>
                    </div>
                  </div>
                  <!-- ============================== -->

                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="Pclub" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Le Club</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="index.php?action=infosAdhesion">Infos/Adhésion</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="index.php?action=discussions">Discussions ( réservé membres )</a>
                  <div class="dropdown-divider"></div>


                  <!-- Sous liens s'affichent à droite de l'onglet -->
                  <div class="dropright">
                    <button class="btn  dropdown-toggle" data-toggle="dropdown">Notre Parcours</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="index.php?action=parcoursPerrieres">Parcours des Perrières</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="index.php?action=parcoursImage">Le parcours en images</a>
                    </div>
                  </div>
                  <!-- ============================== -->

                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="Pcompetition" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Compétitions
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="index.php?action=infosCalendrier">Infos et calendrier</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="index.php?action=challengeCorrezien">Challenge Corrèzien</a>
                </div>
              </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2 " id="search" type="search" placeholder="Rechercher" onfocusin="holdBgColor('search')" aria-label="Search">
              <button class="btn btn-outline mb1  " type="submit">Rechercher</button>
            </form>
          </div>
        </nav>
        <div id="connexion">
          <span><?php if (!isset($_SESSION['user'])) {
                  echo ("&nbsp; &nbsp; <a href='index.php?action=connection'>Connexion</a> ou <a href='index.php?action=subscribe'>inscription</a>  au site &nbsp; &nbsp;");
                } else if (isset($_SESSION['user'])) {
                  echo ("&nbsp; &nbsp; <a href='index.php?action=deconnexion'>Deconnexion</a>&nbsp; &nbsp;");
                } ?> </span>
        </div>
      </div>
      <!-- =============================================================================== -->
      <img src="img\imgaccueil - Copie (2).jpg" alt="" width="100%">
      <hr id="sepHeader">
      <br>

      <?= $content ?>

    </div>

    <br><br>
    <footer>
      <table>
        <tr>
          <td class="col-4" id="apropos">
            <div class="row footer">
              <div class="col">
                <h3 class="titre">A propos</h3>
              </div>
            </div>
            <br>
            <span>Disc Golf Briviste</span><br>
            <span>Parcours de disc golf des Perrières</span><br>
            <span>Rue Louis Plantadis</span><br>
            <span>19100 Brive la gaillarde</span>
            <hr>
          </td>
          <td class="col-8 " id="contact">
            <div class="row footer">
              <div class="col">
                <h3 class="titre" id="titreContact">
                  Contacts
                </h3>
              </div>
            </div>
            <div class="row footer">
              <div class="col">
                <span><strong>Martin Peyre</strong>, Président</span><br>
                <span>Téléphone: 05 55 24 58 51</span><br>
                <span>Email: peyre.martin@neuf.fr</span><br>
                <span>Adresse: 29 rue Léon Bourgeois, 19100 Brive-la-Gaillarde (siège du club)</span>
              </div>
              <div class="col">
                <span><strong>Alain Razaka</strong>, Secrétaire</span><br>
                <span>E-mail: alainrazaka49@gmail.com</span><br><br>
                <span><Strong>Anne Vallaud</Strong>, Webmaster</span><br>
                <span>Téléphone: 06 60 92 42 26</span><br>
                <span>E-mail: annevallaud11@gmail.com</span>
              </div>
            </div>
          </td>
        </tr>
      </table>
      <small>
        Disc Golf Briviste@2021
      </small>
    </footer>
  </div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v12.0" nonce="EC67SAC1">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js%22%3E"> </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.11.0/r-2.2.9/sp-1.4.0/datatables.min.js"></script>
  <script src="./js/script.js"></script>
  <script src="./js/scriptTchat.js"></script>
  <script src="js\scriptModale.js"></script>


</body>

</html>