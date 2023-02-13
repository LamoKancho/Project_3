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
    $b = array($_POST['uname'], $_POST['psw']);
    $a = array("uname", "psw");
    echo"<br>";

echo'<table border="1" width="200">';
foreach($a as $index => $value2)
{
    echo "<tr>";
    echo "<th>" . $value2 . "</th>";
    echo "<td>" . $b[$index] . "</td>";
    echo "</tr>";
}
echo '</table><br>';

$len = strlen($_POST['uname']);
echo "Hier staan de gebruikersnamen: <br>";
echo $_POST['uname'];

    if ($len < 5){
        echo "<br> --> Je gebruikersnaam is korter dan 5, het is $len";
    }

echo " <br><br> Hier staan de wachtwoorden: <br>";
echo $_POST['psw'];
?>
