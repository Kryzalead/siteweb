<!-- 
$(document).ready( function () { 
    // On cache les sous-menus 
    // sauf celui qui porte la classe "open_at_load" : 
    $(".navigation ul.subMenu:not('.openAtLoad')").hide(); 
    // On s�lectionne tous les items de liste portant la classe "toggleSubMenu" 
 
    // et on remplace l'�l�ment span qu'ils contiennent par un lien : 
    $(".navigation li.toggleSubMenu span").each( function () { 
        // On stocke le contenu du span : 
        var TexteSpan = $(this).text(); 
        $(this).replaceWith('<a>' + TexteSpan + '<\/a>') ; 
    } ) ; 
 
    // On modifie l'�v�nement "click" sur les liens dans les items de liste 
    // qui portent la classe "toggleSubMenu" : 
    $(".navigation li.toggleSubMenu > a").click( function () { 
        // Si le sous-menu �tait d�j� ouvert, on le referme : 
        if ($(this).next("ul.subMenu:visible").length != 0) { 
            $(this).next("ul.subMenu").slideUp("normal", function () { $(this).parent().removeClass("open") } ); 
        } 
        // Si le sous-menu est cach�, on ferme les autres et on l'affiche : 
        else { 
            $(".navigation ul.subMenu").slideUp("normal", function () { $(this).parent().removeClass("open") }); 
            $(this).next("ul.subMenu").slideDown("normal", function () { $(this).parent().addClass("open") } ); 
        } 
        // On emp�che le navigateur de suivre le lien : 
        return false; 
    }); 
} ) ; 
// -->