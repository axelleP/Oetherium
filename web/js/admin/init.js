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
     //si l'id existe dans le formulaire et qu'il n'y a pas déjà de valeur (=création)
     if($('input[id$="_number"]').length && $('input[id$="_number"]').val() == ''){
          //met dynamiquement le numéro du nouveau chapitre
          putChapterNumber();
     }
});