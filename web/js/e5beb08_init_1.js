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
     //Change l'apparence
     $('.buttonFontSize').bind('click',(changeFontSize));
     $('.buttonTextColor').bind('click',(changeTextColor));
     $('.buttonTextDisplay').bind('click',(changeTextDisplay));
     //Contrôle la saisie dans l'administration
     //$('[id$="_number"]').bind('change',(chapterNumberCheck));
        
     $( "#navigation ul.firstUl li a" ).each(function() {
       if(this.href == window.location.href){
            $target = 'imgMenu';
            $(this).removeClass('imgMenu')
            $(this).addClass($target + "Current");
       }
     });
});