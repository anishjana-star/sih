<?php
session_start();
echo "WELCOME ".$_SESSION['username']."<br>";
echo "Your id is ". $_SESSION['id']."<br>";

?>
<br><br><a href="logout.php">You can logout here</a>