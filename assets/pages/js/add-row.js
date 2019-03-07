$(document).ready(function(){
    var c = 0;
    $(".add-btn").click(function() {
//        c++;
//        console.log(c);
        if (c<9){
            c++;
            console.log(c);
            var a = $('.one') ;
            var b = a.clone().removeClass('one');
            $("form").append(b);  
        }else{
            window.alert("You have reached maximum length!");
        }
        
    });
});