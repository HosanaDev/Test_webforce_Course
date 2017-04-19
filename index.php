<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>
		<div id="mike">
			<form>
				<fieldset>
					<legend>Requete</legend>
					<textarea name="sql" id="sql" rows="4" cols="50">SELECT * FROM utilisateurs</textarea>
					<br/>
					<input type="submit" value="Envoyez" />
				</fieldset>
			</form>
		</div>
		<script>
			$(function() {
				$( "input" ).click(function(e) {

					// Annulation de l'actualisation de la page'
					e.preventDefault();


					// Console du meillieur Prenom au monde. PS: Mike > Vincent
					console.log("Mike")
					
					// Récuperation de la valeur de notre textarea.
					var myRequest = $("#sql").val(); 

					// Requete Ajax - Envoi des information du formulaire vers un autre page de traitement.
					var request = $.ajax({
						url: "read2.php", // Page de la requete
						method: "POST", // Methode de la requete
						data: {requet : myRequest} // Data envoyer à la page
					});
					
					request.done(function( msg ) {
						$( "#mike" ).html( msg );
					});
					
					request.fail(function( jqXHR, textStatus ) {
						alert( "Request failed: " + textStatus );
					});
				});
			});
		</script>
	<body>
<html>