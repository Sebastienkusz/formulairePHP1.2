<form  action="thanks.php"  method="post">
    <div>
        <label  for="fisrtname">Prénom :</label>
        <input  type="text"  id="fisrtname"  name="user_firstname">
    </div>
    <div>
        <label  for="name">Nom :</label>
        <input  type="text"  id="name"  name="user_name">
    </div>
    <div>
        <label  for="phoneNumber">Numéro de téléphone :</label>
        <input  type="number"  id="phoneNumber"  name="user_phone_number">
    </div>
    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="string"  id="courriel"  name="user_email">
    </div>
    <div>
        <label  for="subject">Nature de votre demanded :</label>
        <select name="subject" id="subject">
            <option value="">Sélectionner un choix</option>
            <option value="Achat">Achat</option>
            <option value="Retour SAV">Retour SAV</option>
            <option value="Autres">Autres</option>
        </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form>
<?php
header('Location : localhost:8000/thanks.php');
?>
