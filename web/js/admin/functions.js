function chapterNumberCheck(){
    chapterNumber = $('input[id$="_number"]').val();
    path = "{{ path('apa_admin_checkChapterNumber') }}";//mauvais chemin
    //alert('ok');
    $.ajax({
       url : path,
       type : 'GET',
       dataType : 'json',
       success : function(data, statut){
           alert('ok3');
       }
    });
    
}