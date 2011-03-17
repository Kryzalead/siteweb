/* Created by jankoatwarpspeed.com */
/* modifi� par Elscorto */

(function($) {
    $.fn.formSteps = function() {
        // on r�cup�re l'�l�ment formulaire
        var element = this;

        // on r�cup�re tous les fieldset
        var steps = $(element).find("fieldset");
        // on compte combien on en a
        var count = steps.size();
        
        // on cr�e notre liste des �tapes
        $(element).before("<ul id='steps'></ul>");

        // pour chaque �tape
        steps.each(function(i) {
            // on n'enl�ve le border des fieldset
            $(this).css('border','none');
            // on l'entoure dans une div
            $(this).wrap("<div id='step" + i + "'></div>");
            // on rajoute la navigation
            $(this).append("<p id='step" + i + "Nav'></p>");

            // on r�cup�re le contenu du legend
            var name = $(this).find("legend").html();
            // on cr� notre li
            $("#steps").append("<li id='stepDesc" + i + "'>Etape " + (i + 1) + "<span>" + name + "</span></li>");

            // si 1�re �tape
            if (i == 0) {
                // on cr� le bouton suivant
                createNextButton(i);
                // on met � jour la liste des �tapes
                selectStep(i);
            }
            // derni�re �tape
            else if (i == count - 1) {
                $("#step" + i).hide();
                createPrevButton(i);
            }
            // �tapes interm�diaire
            else {
                $("#step" + i).hide();
                createPrevButton(i);
                createNextButton(i);
            }
        });

        // fonction qui cr�e le bouton pr�c�dent
        function createPrevButton(i) {
            // on cr�e le nom du bouton
            var stepName = "step" + i;
            // on ajoute le bouton � notre navigation
            $("#" + stepName + "Nav").append("<a href='#' id='" + stepName + "Prev' class='prev'>< Retour</a>");

            // on ajoute un �v�nement onClick sur le bouton
            $("#" + stepName + "Prev").bind("click", function() {
                // on cache l'�tape actuelle
                $("#" + stepName).hide();
                // on affiche l'�tape pr�c�dente
                $("#step" + (i - 1)).show();
                // on met � jour notre liste
                selectStep(i - 1);
            });
        }

         // fonction qui cr�e le bouton suivant
        function createNextButton(i) {
            var stepName = "step" + i;
            $("#" + stepName + "Nav").append("<a href='#' id='" + stepName + "Next' class='next'>Suivant ></a>");

            $("#" + stepName + "Next").bind("click", function() {
                $("#" + stepName).hide();
                $("#step" + (i + 1)).show();
                selectStep(i + 1);
            });
        }

        // fonction de mise � jour de la liste
        function selectStep(i) {
            $("#steps li").removeClass("current");
            $("#stepDesc" + i).addClass("current");
        }

    }
})(jQuery); 