$( document ).ready(function() {
    var iWindowsSize = $(window).width();

    if (iWindowsSize  < 991){
        $("#liste_header > li").click(function() {
            $(this).children(".sous_liste_header").toggle(300);
            if($(this).children(".icone_plus").hasClass("active_icone")){
                $(this).children(".icone_plus").removeClass("active_icone");
                $(this).children(".icone_moins").addClass("active_icone");
            }else{
                $(this).children(".icone_moins").removeClass("active_icone");
                $(this).children(".icone_plus").addClass("active_icone");
            }
        });
    }else{
        $("#liste_header > li").hover(function() {
            $(this).children(".sous_liste_header").fadeToggle("fast");
        });
    }
});