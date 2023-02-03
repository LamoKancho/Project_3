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
    echo"Hier staan de gebruikersnamen: <br>";
    echo $_POST['uname'];
    echo " <br><br> Hier staan de wachtwoorden: <br>";
    echo $_POST['psw'];
    ?>
</body>
</html>