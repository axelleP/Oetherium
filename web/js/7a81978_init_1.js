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
    $("#administration").bind("click",(displayLogin()));
    $("#formLogin .closeForm").bind("click",(displayLogin()));
    $("#failedConnection .closeForm").bind("click",(displayFailedConnection()));
    //Change l'apparence du site
    $(".buttonFontSize").bind("click",(changeFontSize()));
    $(".buttonTextColor").bind("click",(changeTextColor()));
    $(".buttonTextDisplay").bind("click",(changeTextDisplay()));
    //Affiche le texte de l'auteur
    $("#avatarHelly, #avatarKikile").click(displayTextAuthor()); 
    //Affiche la bordure des images des auteurs
    $("#avatarHelly, #avatarKikile").hover(
        function() {
            displayBorderAuthor("#"+this.id, "", "", "onHover");
        },
        function() {
            displayBorderAuthor("#"+this.id, "", "", "outHover");     
        }       
    );
    //Met l'image du menu courant correspondant à la page courante
    $( "#navigation ul.firstUl li a" ).each(function() {
        if(this.href === window.location.href){
            $target = "imgMenu";
            $(this).removeClass("imgMenu");
            $(this).addClass($target + "Current");
        }
    });
});