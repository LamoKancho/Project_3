<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub 1</title>
</head>
<header>
    <?php include("Menu.php");  ?>
    <?php
echo "Today is " . date("l ") . date("Y/m/d") . "<br>";
?>
</header>
<body>
    <form action="Sub_2_Embiya.php" method="post">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    
</form>
</body>
</html>