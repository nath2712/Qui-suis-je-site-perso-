<div id = "contact">
 <p > <a href ="#" class ="neant3">^ </a></p>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<h1 class = 'titre'> Me contacter ? </h1>    
    <form method="post">
			<table>
						<tr>
							<td> <label>Raison ? :</label></td>
							<td><input type="text" name="nom" id ="nom" required placeholder="Entrez la raison pour laquelle vous voulez me contacter..."></td>
						</tr>
					
						<tr>
							<td><label>Votre Email:</label></td>
							<td><input type="email" name="email" id ="email" required  placeholder= "Entrez l'adresse mail sur laquelle je devrais répondre "> </td>
						</tr>
				
						<tr>
							<td><label>Message :</label></td>
						</tr>
						<tr>
							<td colspan=2><textarea name="message" id ="message" required rows="10" cols="50"> Entrez votre message </textarea></td>
						</tr>
					
			</table>
		    <div class="g-recaptcha" data-sitekey="6Lf3TuAZAAAAABectoJM_byr-zZ49Zd3sCXh02g9"></div>
			<input type="submit" value="Envoyer" id="envoyer" name="submitpost">
    </form>

	<?php 
    require ('recaptcha/autoload.php');
    
    if(isset($_POST['submitpost'])){
        if(isset($_POST['g-recaptcha-response'])){
            if(!empty($_POST['g-recaptcha-response'])) {
                $recaptcha = new \ReCaptcha\ReCaptcha('6Lf3TuAZAAAAAJ5ywK5BplDm7K7PzHclX_IJW0LM');
                $resp = $recaptcha->verify($_POST['g-recaptcha-response']); //vérification de la réponse renvoyé par le formulaire de captcha
                if ($resp->isSuccess()) { //si la réponse est un succès alors on exécute le code d'envoi du formulaire
                // Verified!
                    if(isset($_POST['email'])) //si le champ email existe
                    {
                        if(!empty($_POST['nom']) and !empty($_POST['email']) and !empty($_POST['message'])) //si les champs sont complétés
                        {   // ----Formats d'encodage----
                            $header ="MIMI-Version 1.0\r\n";
                            $header .= 'From: "siteperso" ' . "\n";
                            $header .='Content-Type:text/html; charset="utf-8"'. "\n";
                            $header .='Content-Transfer-Encoding: 8bit';
            
                            // ----Message----
                            $message = '
                            <html>
                                <body>
                                    <ul>Raison : '.$_POST['nom']. '</ul>
                                    <ul>adresse mail : '.$_POST['email']. '</ul>
                                    <ul>Message : '.nl2br($_POST['message']). '</ul>
                                </body>
                            </html>';
                            mail(, "Mail contact profil pro", $message, $header); //envoi du mail avec la fonction mail(adresse cible, objet, message et en-tête)
                            $msg="<p class='form_succes'><i class='fas fa-check'></i> Votre message à bien été envoyé !</p>";
                        }else{
                            $msg="<p class='form_error'>Veuillez compléter tout les champs !</p>";
                        }
                    }
                } 
            } else {
                $msg_captcha="<p class='form_error_2'><i class='fas fa-times'></i> merci de valider le captcha</p>";
            }
        }
    }

    if(isset($msg)) {
        echo $msg;
    } //on écrit le message qu'il soit la confirmation d'envoi ou un message d'erreur

    if(isset($msg_captcha)) {
        echo $msg_captcha;
    }
	?>


</div>

