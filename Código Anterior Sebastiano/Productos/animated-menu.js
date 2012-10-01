$(document).ready(function(){  
  
    //When mouse rolls over  
    $("a.a").click(function(){  
        $("#li"+$(this).attr("id")).stop().animate({height:'240px'},{queue:false, duration:600, easing: 'easeOutBounce'});  
    });  
  
    //When mouse is removed  
    $("a.ali").click(function(){  
        $("#li"+$(this).attr("id")).stop().animate({height:'0px'},{queue:false, duration:600, easing: 'easeOutBounce'})  
    });  
    $("a.a").click(function(){  
        $("#li"+$(this).attr("id")).stop().animate({height:'240px'},{queue:false, duration:600, easing: 'easeOutBounce'})  
    });  
  
});  
