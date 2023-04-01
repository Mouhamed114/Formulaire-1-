

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thanks</title>
</head>
<body>
    <main>
        <div>
            <p>
            Merci <?= $_POST['user_name'] ?> de nous avoir contacté à propos de <?=$_POST['subject']?>.

Un de nos conseillers vous contactera soit à l’adresse <?=$_POST['user_email']?> ou par téléphone au <?=$_POST['user_phone']?> dans les plus brefs délais pour traiter votre demande : 

<?=$_POST['user_message']?>
            </p>
        </div>
    </main>
</body>
</html>
