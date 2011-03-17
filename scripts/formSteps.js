/* Created by jankoatwarpspeed.com */
/* modifié par Elscorto */

(function($) {
    $.fn.formSteps = function() {
        // on récupère l'élément formulaire
        var element = this;

        // on récupère tous les fieldset
        var steps = $(element).find("fieldset");
        // on compte combien on en a
        var count = steps.size();
        
        // on crée notre liste des étapes
        $(element).before("<ul id='steps'></ul>");

        // pour chaque étape
        steps.each(function(i) {
            // on n'enlève le border des fieldset
            $(this).css('border','none');
            // on l'entoure dans une div
            $(this).wrap("<div id='step" + i + "'></div>");
            // on rajoute la navigation
            $(this).append("<p id='step" + i + "Nav'></p>");

            // on récupère le contenu du legend
            var name = $(this).find("legend").html();
            // on cré notre li
            $("#steps").append("<li id='stepDesc" + i + "'>Etape " + (i + 1) + "<span>" + name + "</span></li>");

            // si 1ère étape
            if (i == 0) {
                // on cré le bouton suivant
                createNextButton(i);
                // on met à jour la liste des étapes
                selectStep(i);
            }
            // dernière étape
            else if (i == count - 1) {
                $("#step" + i).hide();
                createPrevButton(i);
            }
            // étapes intermédiaire
            else {
                $("#step" + i).hide();
                createPrevButton(i);
                createNextButton(i);
            }
        });

        // fonction qui crée le bouton précédent
        function createPrevButton(i) {
            // on crée le nom du bouton
            var stepName = "step" + i;
            // on ajoute le bouton à notre navigation
            $("#" + stepName + "Nav").append("<a href='#' id='" + stepName + "Prev' class='prev'>< Retour</a>");

            // on ajoute un évènement onClick sur le bouton
            $("#" + stepName + "Prev").bind("click", function() {
                // on cache l'étape actuelle
                $("#" + stepName).hide();
                // on affiche l'étape précédente
                $("#step" + (i - 1)).show();
                // on met à jour notre liste
                selectStep(i - 1);
            });
        }

         // fonction qui crée le bouton suivant
        function createNextButton(i) {
            var stepName = "step" + i;
            $("#" + stepName + "Nav").append("<a href='#' id='" + stepName + "Next' class='next'>Suivant ></a>");

            $("#" + stepName + "Next").bind("click", function() {
                $("#" + stepName).hide();
                $("#step" + (i + 1)).show();
                selectStep(i + 1);
            });
        }

        // fonction de mise à jour de la liste
        function selectStep(i) {
            $("#steps li").removeClass("current");
            $("#stepDesc" + i).addClass("current");
        }

    }
})(jQuery); 