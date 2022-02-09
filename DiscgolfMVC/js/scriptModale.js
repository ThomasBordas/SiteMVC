var mod;
// gestion des évènements "click" pour ouverture des fenetres modales du site
$(document).ready(function() {
    $('#c1').click(function() {
        $('.modC1').fadeIn();
        mod = '.modC1';
    });
    $('#c2').click(function() {
        $('.modC2').fadeIn();
        mod = '.modC2';
    });
    $('#c3').click(function() {
        $('.modC3').fadeIn();
        mod = '.modC3';
    });
    $('#c4').click(function() {
        $('.modC4').fadeIn();
        mod = '.modC4';
    });
    $('#c5').click(function() {
        $('.modC5').fadeIn();
        mod = '.modC5';
    });
    $('#c6').click(function() {
        $('.modC6').fadeIn();
        mod = '.modC6';
    });
    $('#c7').click(function() {
        $('.modC7').fadeIn();
        mod = '.modC7';
    });
    $('#c8').click(function() {
        $('.modC8').fadeIn();
        mod = '.modC8';
    });
    $('#c9').click(function() {
        $('.modC9').fadeIn();
        mod = '.modC9';
    });
    $('#c10').click(function() {
        $('.modC10').fadeIn();
        mod = '.modC10';
    });
    $('#c11').click(function() {
        $('.modC11').fadeIn();
        mod = '.modC11';
    });
    $('#c12').click(function() {
        $('.modC12').fadeIn();
        mod = '.modC12';
    });
    $('#c13').click(function() {
        $('.modC13').fadeIn();
        mod = '.modC13';
    });
    $('#c14').click(function() {
        $('.modC14').fadeIn();
        mod = '.modC14';
    });
    $('#c15').click(function() {
        $('.modC15').fadeIn();
        mod = '.modC15';
    });
    $('#c16').click(function() {
        $('.modC16').fadeIn();
        mod = '.modC16';
    });
    $('#c17').click(function() {
        $('.modC17').fadeIn();
        mod = '.modC17';
    });
    $('#c18').click(function() {
        $('.modC18').fadeIn();
        mod = '.modC18';
    });
    $('#infosChampsUser').click(function() {
        $('.infosUserMod').fadeIn();
        mod = '.infosUserMod';
    });
    $('#infosChampsPwd').click(function() {
        $('.infosPwdMod').fadeIn();
        mod = '.infosPwdMod';
    });
    $('#infosChampsMail').click(function() {
        $('.infosMailMod').fadeIn();
        mod = '.infosMailMod';
    });
});
// gestion de la fermeture des fenêtres modales
$(document).ready(function() {
    $(".modFermer").click(function() {
        $(mod).fadeOut();
    });
});