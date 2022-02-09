// Methode pour afficher les "sous liens" du menu à droite et non en dessous de l'onglet
$(document).ready(function() {
    $('.dropright button').on("click", function(e) {
        e.stopPropagation();
        e.preventDefault();
        if (!$(this).next('div').hasClass('show')) {
            $(this).next('div').addClass('show');
        } else {
            $(this).next('div').removeClass('show');
        }

    });
});

//Suppression de l'affichage des "sous onglets" si on clique sur un autre onglet
$(document).ready(function() {
    $('.dropdown').on("click", function() {
        $('.dropright button').next('div').removeClass('show');

    });
});


//Garder la couleur du Bg de l'input du champ de recherche quand on est dessus
function holdBgColor(id) {
    document.getElementById(id).style.backgroundColor = "#1fbee9";
}


//Génération du datable des résultats des compétitions via une API
$("#buttonCompet").on("click", function() {

    $.ajax({
        url: 'https://discgolfmetrix.com/api.php?content=result&id=' + $("#idCompet").val(),
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            //Generation des titres de colonnes , permet un nombre illimité de Rondes
            let fluxHtmlHead = "<tr> <th>Nom et prénom</th> <th>Catégorie</th>";
            for (let i = 0; i < data.Competition.SubCompetitions.length; i++) {
                fluxHtmlHead += "<th>Ronde " + (i + 1) + "</th>"
            }
            fluxHtmlHead += "<th>Total</th> </tr>"
            $("#headLine").html(fluxHtmlHead);

            //Géneration du contenu ,nom du joueur , niveau , resultat par manche et total de points
            let fluxHtml = "";
            if (data.Competition.SubCompetitions.length > 0) {
                for (let i = 0; i < data.Competition.SubCompetitions[0].Results.length; i++) {
                    fluxHtml += "<tr>" +
                        "<td>" + data.Competition.SubCompetitions[0].Results[i].Name + "</td>" +
                        "<td>" + data.Competition.SubCompetitions[0].Results[i].ClassName + "</td>";

                    total = 0;
                    for (let j = 0; j < data.Competition.SubCompetitions.length; j++) {
                        fluxHtml += "<td>" + data.Competition.SubCompetitions[j].Results[i].Sum + "</td>";
                        total += data.Competition.SubCompetitions[j].Results[i].Sum;
                    }
                    fluxHtml += "<td>" + total + "</td></tr>";
                }
            }

            $("#colonnes").html(fluxHtml);

            $('#challenge').dataTable({
                "aLengthMenu": [
                    [25, 50, 100, 500],
                    [25, 50, 100, 500]
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                }
            });
        }
    })
});