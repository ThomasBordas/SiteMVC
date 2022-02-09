<?php
$title = "Page de discussion";
ob_start();
session_start()
?>
<?php
if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    // Ici, l'utilisateur est connecté
?>
    <p id="pDiscussion">Bonjour <?= $_SESSION['user'] ?></p>
    <div class="col-12 my-1">
        <div class="p-2" id="discussion">
        </div>
    </div>
    <div class="col-12 saisie">
        <div class="input-group">
            <input type="text" class="form-control" id="texte" placeholder="Entrez votre texte">
            <div class="input-group-append">
                <span class="input-group-text" id="valid"><i class="la la-check"></i></span>
            </div>
        </div>
    </div>
<?php
} else {
    // Ici l'utilisateur n'est pas connecté
?>
    <h2 id="h2Discussion">Veuillez vous connecter pour parcticiper aux discussions</h2>
<?php
}
?>



<?php
$content = ob_get_clean();
include "baselayout.php";
?>