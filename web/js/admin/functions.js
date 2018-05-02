function putChapterNumber() {
    path = Routing.generate('apa_admin_getLastChapterNumber');

    $.ajax({
        url : path,
        type : 'GET',
        dataType : 'json',
        success : function(lastChapterNumber, statut) {
            $('input[id$="_number"]').val(parseInt(lastChapterNumber)+1);
        }
    });
}