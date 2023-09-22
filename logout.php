<?php
session_start();
session_unset();
session_destroy();

setcookie('user_login',"");
setcookie('userpassword',"");

header("location:Login/");

?>