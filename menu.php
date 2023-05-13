<body>
    <link rel="stylesheet" href="menu.css">
	<link rel="stylesheet" href="style.css">

	<header>
        
		<nav>
			<ul>
				<li><a href="index.php"><img src="hatakayalogo.jpg" alt=""></a></li>
				<li><a href="index.php">Home</a></li>
				<li><a href="telefoons.php">Telefoons</a></li>
				<li><a href="klantenservice.php">Klantenservice</a></li>
				<li><a href="contact.php">Contact</a></li>
				<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['username'])) {
    // gebruiker is ingelogd
    echo "<li><a >Welkom, " . $_SESSION['username'] . "!</a></li>";
    echo '<li><a href="logout.php">Uitloggen</a></li>';
} else {
    // gebruiker is niet ingelogd
	echo '<li><a href="register.php">Registreren</a></li>';
    echo '<li><a href="login.php">Inloggen</a></li>';
    
}
?>

			</ul>
		</nav>
	</header>
</body>
<footer>
      <p>&copy; 2023 Hatakaya. All rights reserved.</p>
    </footer>