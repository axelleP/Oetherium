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