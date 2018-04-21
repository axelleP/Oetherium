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
    $element = "#middleFrame";
    $element2 = "#contentMiddleFrame span";
   
    if($($element).css("color") == "rgb(0, 0, 0)" && $($element2).css("color") == "rgb(0, 0, 0)"){
        $($element).css( "color", "blue");
        $($element2).css( "color", "green");
    }else{
        $($element).css( "color", "rgb(0, 0, 0)");
        $($element2).css( "color", "rgb(0, 0, 0)");
    }
}

function changeTextDisplay(){
    $element = ".contentChapter s";
    
    if($($element).hasClass("spaceTextDisplay")){}
    else{
        $($element).append("<br>");
        $($element).addClass("spaceTextDisplay");
    }
    
    if($($element).is(":visible")){
        $($element).fadeOut( "slow" );
    }else{
        $($element).fadeIn( "slow" );
        $($element).css( "color", "rgb(192, 158, 101)");
    }   
}

function displayTextAuthor(){
    $avatarId = "#"+this.id;
    $descriptionId = $avatarId.replace("avatar", "description");

    //si c'est l'avatar helly
    if($avatarId.indexOf("Helly") != -1){
        $cssBorder = "2px solid black";
        $avatarId2 = "#avatarKikile";
        $descriptionId2 = "#descriptionKikile";           
    } else{
        $cssBorder = "2px solid white";
        $avatarId2 = "#avatarHelly";
        $descriptionId2 = "#descriptionHelly";           
    }
     
    //si la description de l'avatar sélectionné est caché
    if($($descriptionId).is(":hidden")){
        $($descriptionId).css("display", "block");
        $($descriptionId2).css("display", "none");  
        displayBorderAuthor($avatarId, $cssBorder, $avatarId2, "click");
        $($avatarId).addClass("selected");
        $($avatarId2).removeClass("selected");
    } else{
        $($descriptionId).css("display", "none");
        displayBorderAuthor($avatarId, "", "", "click");
        $($avatarId).removeClass("selected");
    }
}

function displayBorderAuthor($id, $cssBorder = "", $id2 = "", $nameEvent){
    if($nameEvent == "click"){
        if($id2 !== ""){
            $($id).css("border",$cssBorder);
            $($id2).css("border","none");
        } else{
            $($id).css("border","none");
        }
    } else if ($nameEvent == 'onHover') {
        if($id.indexOf("Helly") != -1){
            $("#avatarHelly").css("border","2px solid black");
        } else{
            $("#avatarKikile").css("border","2px solid white");
        } 
    } else if ($nameEvent == 'outHover') {
        //si l"utilisateur n'a pas cliqué sur l'auteur
        if(!$($id).hasClass("selected")){
            if($id.indexOf("Helly") != -1){
                $("#avatarHelly").css("border","none");
            } else{
                $("#avatarKikile").css("border","none");
            }
        } 
    }
}