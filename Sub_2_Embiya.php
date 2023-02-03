<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub 2</title>
</head>
<header>
    <?php include("Menu.php");?>
</header>
<body>
    <?php 
    $len = strlen($_POST['uname']);
    echo "Hier staan de gebruikersnamen: <br>";
    echo $_POST['uname'];

        if ($len < 5){
            echo "Je gebruikersnaam is korter dan 5, het is namelijk $len";
        }

    echo " <br><br> Hier staan de wachtwoorden: <br>";
    echo $_POST['psw'];
    ?>
</body>
</html>