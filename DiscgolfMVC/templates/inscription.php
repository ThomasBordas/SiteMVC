<?php
$title = "Page inscription";
ob_start();

?>
<!-- fenêtres modales des infos bulles -->
<div class="modC infosUserMod">
    <div class="modCMess12 ">
        <h2 class="modTitre ">Infos Pseudo</h2>
        <div class="d-flex ">
            <div class="row justify-content-between col-12">
                <h5>Votre pseudo doit avoir au moins 4 caractères .Seuls les lettres (min ou maj) , les lettres accentuées , le - (touche 6) et le _ ( touche 8 ) sont autorisés.</h5>
            </div>
        </div>
        <div class="modClose">
            <button class="modFermer">Fermer</button>
        </div>
    </div>
</div>
<div class="modC infosPwdMod">
    <div class="modCMess12 ">
        <h2 class="modTitre ">Infos Mot de passe </h2>
        <div class="d-flex ">
            <h5>Votre Mot de passe doit contenir au moins 6 caractères comprenant au minimum une lettre minuscule , une lettre majuscule , un chiffre et un caractère spécial.</h5>
        </div>
        <div class="modClose">
            <button class="modFermer">Fermer</button>
        </div>
    </div>
</div>
<div class="modC infosMailMod">
    <div class="modCMess12 ">
        <h2 class="modTitre ">Infos adresse mail</h2>
        <div class="d-flex ">
            <h5>Votre adresse mail doit être de type : exemple@exemple.fr .</h5>
        </div>
        <div class="modClose">
            <button class="modFermer">Fermer</button>
        </div>
    </div>
</div>

<!-- formulaire avec affichage d'erreurs en cas de non respect des prérequis -->
<div class="container d-flex justify-content-around">
    <h1 class="text-center titreCoIns">Inscription au site</h1>
</div>
<?php if (empty($_SESSION['user'])) { ?>
    <span class="text-danger"><?php if (!empty($erreurs["doublons"])) {
                                    echo $erreurs["doublons"];
                                } ?></span>
    <form action="index.php?action=add" method="POST" class="container">
        <table class="table table-striped table-dark">
            <tbody>
                <tr>
                    <td><label for="user">Utilisateur :</label></td>
                    <td><input type="text" id="user" name="user" value="<?php if (!empty($_POST["user"])) {
                                                                            echo $_POST["user"];
                                                                        } ?>"></td>
                    <td class="text-danger"><?php if (!empty($erreurs["pseudo_user"])) {
                                                echo $erreurs["pseudo_user"];
                                            } ?><i class="fas fa-info-circle" id="infosChampsUser"></i></td>
                </tr>
                <tr>
                    <td><label for="pwd">Mot de passe :</label></td>
                    <td><input type="password" name="pwd" id="pwd" value="<?php if (!empty($_POST["pwd"])) {
                                                                                echo $_POST["pwd"];
                                                                            } ?>"></td>
                    <td class="text-danger"><?php if (!empty($erreurs["pwd_user"])) {
                                                echo $erreurs["pwd_user"];
                                            } ?><i class="fas fa-info-circle" id="infosChampsPwd"></i> </td>
                </tr>
                <tr>
                    <td><label for="pwdVerif">Confirmation mot de passe :</label></td>
                    <td><input type="password" name="pwdV" id="pwdV" value="<?php if (!empty($_POST["pwdV"])) {
                                                                                echo $_POST["pwdV"];
                                                                            } ?>"></td>
                    <td class="text-danger"><?php if (!empty($erreurs["pwdV_user"])) {
                                                echo $erreurs["pwdV_user"];
                                            } ?> </td>
                </tr>
                <tr>
                    <td><label for="mail">Email :</label></td>
                    <td><input type="text" id="mail" name="mail" value="<?php if (!empty($_POST["mail"])) {
                                                                            echo $_POST["mail"];
                                                                        } ?>"></td>
                    <td class="text-danger"><?php if (!empty($erreurs["mail_user"])) {
                                                echo $erreurs["mail_user"];
                                            } ?><i class="fas fa-info-circle" id="infosChampsMail"></i> </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit">Enregistrer</button><button type="" formaction="index.php">Annuler </button>
                    <td></td>
                </tr>
            </tbody>
        </table>

    </form>
<?php } else { ?>
    <h1 id="h1Ins">Vous êtes connecté</h1>
<?php } ?>
<a href="index.php?action=accueil">Retour à l'accueil</a>


<?php
$content = ob_get_clean();
include "baselayout.php";
?>