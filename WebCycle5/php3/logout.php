<?php
// Clear the user cookie
setcookie("user", "", time() - 3600, "/");
header("Location: login.php");
exit;
?>