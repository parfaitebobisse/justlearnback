
$( document ).ready(function() {
    $(function(){
        $('[data-toggle="tooltip"]').tooltip();
        $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
            $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
        });
        $('.side-nav .collapse').on("show.bs.collapse", function() {                        
            $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
        });
    })    
    
    /* dropdown menu droit */

    $("#sub_user > a").click(function() { 
        $(".user").css("padding-top","102px");
        $("#sous_menu").fadeIn('fast');
        console.log("click");   
    });
    $("#sub_user #name_user").click(function() { 
        $(".user").css("padding-top","102px");
        $("#sous_menu").fadeIn('fast');
        console.log("click");   
    });
    $("#sous_menu li a").click(function() { 
        $(".user").css("padding-top","0px");
        $("#sous_menu").hide();
    });
    $(document).click(function(event) { 
        if(!$(event.target).closest('#sub_user').length){
            $(".user").css("padding-top","0px");
            $("#sous_menu").hide();
        }
    });
});