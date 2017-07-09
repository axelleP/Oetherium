function displayLogin(){
    $idLogin = "#formLogin";
    $idDiv = "#grayBackground";
     
    if($($idLogin).is(":hidden")){
       $($idLogin).fadeIn( "slow" );
       $($idDiv).fadeIn( "slow" );
    }
    else{
       $($idLogin).css( "display", "none");
       $($idDiv).css( "display", "none");
    }
}

function displayFailedConnection(){
    $id = "#failedConnection";
    $($id).css( "display", "none");
}

function changeFontSize(){
    $element = "html";
    if($($element).css("font-size") == "16px"){
        $($element).css( "font-size", "0.9em");
    }else{
        $($element).css( "font-size", "1em");
    }  
}

function changeTextColor(){
    $element = "#contentMiddleFrame";
    $element2 = "#contentMiddleFrame span";
   
    if($($element).css("color") == "rgb(0, 0, 0)" && $($element2).css("color") == "rgb(0, 0, 0)"){
        $($element).css( "color", "blue");
        $($element2).css( "color", "blue");
    }else{
        $($element).css( "color", "rgb(0, 0, 0)");
        $($element2).css( "color", "rgb(0, 0, 0)");
    }
}

function changeTextDisplay(){
    $element = ".contentChapter s";
    
    if($($element).hasClass("spaceTextDisplay")){}
    else{
        $($element).append('<br>');
        $($element).addClass("spaceTextDisplay");
    }
    
    if($($element).is(":visible")){
        $($element).fadeOut( "slow" );
    }else{
        $($element).fadeIn( "slow" );
        $($element).css( "color", "rgb(192, 158, 101)");
    }   
}

function displayAuthor(){
    $avatarId = this.id;
    $descriptionId = '#'+$avatarId.replace('avatar', 'description');

    //si c'est l'avatar helly
    if($avatarId.indexOf('Helly') != -1){
        $cssBorder = '2px solid black';
        $cssBorder2 = '3px solid white';
        $avatarId2 = 'avatarKikile';
        $descriptionId2 = '#descriptionKikile';           
    } else{
        $cssBorder = '3px solid white';
        $cssBorder2 = '2px solid black';
        $avatarId2 = 'avatarHelly';
        $descriptionId2 = '#descriptionHelly';           
    }
     
    //si la description de l'avatar sélectionné est caché
    if($($descriptionId).is(":hidden")){
       $($descriptionId).css( "display", "block");
       $($descriptionId2).css( "display", "none");
       $('#'+$avatarId).css("border",$cssBorder);
       $('#'+$avatarId2).css("border",'none');     
    } else{
       $($descriptionId).css( "display", "none");
       $('#'+$id).css("border",'none');
    }
    /* mis en com le 09/07/2017 en attendant de trouver une solution */
//    $('#'+$avatarId+':hover').css("border",$cssBorder);
//    $('#'+$avatarId2+':hover').css("border",$cssBorder2);
}