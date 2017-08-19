/**
 * Initialisation des écouteurs
 * 
 * @author axelle
 * @version 1.0
 * @package 
 */

/**
 * Gestion des événements
 */
$(document).ready(function() {
    //Affiche/Cache la connexion
    $('#administration').bind('click',(displayLogin));
    $('#formLogin .closeForm').bind('click',(displayLogin));
    $('#failedConnection .closeForm').bind('click',(displayFailedConnection));
    //Change l'apparence du site
    $('.buttonFontSize').bind('click',(changeFontSize));
    $('.buttonTextColor').bind('click',(changeTextColor));
    $('.buttonTextDisplay').bind('click',(changeTextDisplay));
    //Affiche le texte de l'auteur
    $('#avatarHelly, #avatarKikile').bind('click',(displayAuthor));
    //Gestion du hover sur les images des auteurs
    $('#avatarHelly').hover(function() {
        $('#avatarHelly').css("border",'2px solid black');
        $('#avatarKikile').css("border",'none');
    });
    $('#avatarKikile').hover(function() {
        $('#avatarKikile').css("border",'2px solid white');
        $('#avatarHelly').css("border",'none');
    });
    //met l'image du menu courant correspondant à la page courante
    $( "#navigation ul.firstUl li a" ).each(function() {
        if(this.href == window.location.href){
            $target = 'imgMenu';
            $(this).removeClass('imgMenu')
            $(this).addClass($target + "Current");
        }
    });
});