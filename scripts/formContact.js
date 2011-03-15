$(function() {

		// si clique sur le lien contact
		$('a.popinContact').click(function(){

			// scroll to top (à voir l'utilité)
			$('html, body').animate({scrollTop:0}, 'fast');

			// on fait apparaitre le form
			$('form#contactForm').show();

			// on fait apparaitre le mask avec l'effet puis la div contact
			$('#mask').show().animate({opacity: 0.7},500);
			$('div#contact').fadeIn('slow');

			// on bloque l'action du lien
			return false;
			});

			// fermeture de la div contact et du mask
			$('div#close, div#mask').click(function() {
				$('div#contact, div#mask').stop().fadeOut('slow');

			});
			
			// soumission du formulaire
			$('#contactForm').submit(function() {
				
				//on récupère les valeurs des champs
				var nom = $('#nom').val(),
					email = $('#email').val(),
					message = $('#message').val();

				// variable pour gérer les erreurs
				var trigger = true;

				// Expression régulière
				var nom_regex = /^[a-zA-Z0-9_-]{3,16}$/,
					email_regex = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;

					//Test champs Nom
					if(!nom_regex.test(nom)) {
						$('#l_nom').next('.error').show();
						trigger = false;
					}
					else $('#l_nom').next('.error').hide();

					//Test champs Email
					if(!email_regex.test(email)) {
						$('#l_email').next('.error').show();
						trigger = false;
					}
					else $('#l_email').next('.error').hide();
					
					// test champs Message
					if(message == '') {
						$('#l_message').next('.error').show();
						trigger = false;
					}
					else $('#l_message').next('.error').hide();
					
					// si pas d'erreur
					if(trigger) {
						/*$.ajax({
							type: "post",
							url: "send.php",
							data: "name=" + name + "&email=" + email + "&comment=" + comment,
							error: function() {
								$('.error').hide();
								$('#sendError').slideDown('slow');
							},
							success: function () {
								$('.error').hide();
								$('.success').slideDown('slow');
								$('form#contactForm').fadeOut('slow');
							}
						});
						*/
						alert('c\'est bon');
					}
				
				// on bloque l'action du submit, pour éviter de renvoyer la page.
				return false;
			});

		});