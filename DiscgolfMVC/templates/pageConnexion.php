<?php
$title = "Page de connexion";
ob_start();

?>
<h1 class="text-center titreCoIns">Connexion</h1>
<div class="col-12 text-right">
    <a href="index.php?action=subscribe">Créer un compte</a>
</div>
<span class="text-danger text-center"><?php if (!empty($erreurs["doublons"])) {
                                            echo $erreurs["doublons"];
                                        } ?></span>
<!-- formulaire avec affichage d'erreurs en cas de non respect des prérequis -->
<?php if (empty($_SESSION['user'])) { ?>
    <form action="index.php?action=connect" method="POST" class="container">

        <table class="table table-striped table-dark">
            <tbody>
                <tr>
                    <td><label for="user">Utilisateur :</label></td>
                    <td><input type="text" id="user" name="user" value="<?php if (!empty($_POST["user"])) {
                                                                            echo $_POST["user"];
                                                                        } ?>"></td>
                    <td class="text-danger"><?php if (!empty($erreurs["pseudo_user"])) {
                                                echo $erreurs["pseudo_user"];
                                            } ?></td>
                </tr>
                <tr>
                    <td><label for="pwd">Mot de passe :</label></td>
                    <td><input type="password" name="pwd" id="pwd"></td>
                    <td class="text-danger"><?php if (!empty($erreurs["pwd_user"])) {
                                                echo $erreurs["pwd_user"];
                                            } ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit">Valider</button>
                        <button type="" formaction="index.php">Annuler </button>
                    <td></td>
                </tr>
            </tbody>
        </table>


    </form>
<?php } else { ?>
    <h1 id="h1Co">Vous êtes connecté</h1>
<?php } ?>

<?php
$content = ob_get_clean();
include "baselayout.php";
?>