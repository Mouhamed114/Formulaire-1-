
<?php 
//var_dump($_POST); 

//echo $_POST['user_name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<body>

<form  action="/thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>

    <div>
      <label  for="phoneNumber">Phone Number :</label>
      <input  type="tel"  id="phoneNumber"  name="user_phone">
    </div>

    <div>
        <label for="subject">Sujet : </label>
        <select name="subject" id="subject">
            <option value="sujet 1" name = "sujet 1"> sujet 1</option>
            <option value="sujet 2" name = "sujet 2"> sujet 2</option>
            <option value="sujet 3" name = "sujet 3"> sujet 3</option>
            <option value="sujet 4" name = "sujet 4"> sujet 4</option>
        </select>
        </div>


    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
   
</body>
</html>