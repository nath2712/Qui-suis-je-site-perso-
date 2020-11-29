<div class='formulaire' id='formulaire'>
<?php 
    echo "<h1>" . $formulaire[0]['title'] . "</h1>";
?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<form method='post' id="formulaire" action="#formulaire">
    <label for="firstname"><?php echo $formulaire[1]['title_field_firstname']; ?></label>
    <input type="text" name="firstname" id="firstname" required="true" placeholder="Entrez votre prénom" value="<?php if(isset($_POST['firstname'])){ echo $_POST['firstname']; /* code pour garder rempli les champs dans le cas d'un oubli de certains champs par exemple*/ } ?>">
    <label for="name"><?php echo $formulaire[1]['title_field_name']; ?></label>
    <input type="text" name="name" id="name" required="true" placeholder="Entrez votre nom" value="<?php if(isset($_POST['name'])){ echo $_POST['name']; } ?>">
    <label for="email"><?php echo $formulaire[1]['title_field_mail']; ?></label>
    <input type="email" name="email" id="email" required="true" placeholder="Entrez votre adresse email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>">
    <label for="message"><?php echo $formulaire[1]['title_field_message']; ?></label>
    <textarea rows="5" name="message" id="message" required="true" placeholder="Entrez votre message" value="<?php if(isset($_POST['message'])){ echo $_POST['message']; } ?>"></textarea>
    <div class="g-recaptcha" data-sitekey="6LfY7N8ZAAAAAOB1Q4ehiM0GPyMWoh1GqoT_ey7y"></div>
    <input type="submit" value="Envoyer" id="envoyer" name="submitpost">
</form>


</div>