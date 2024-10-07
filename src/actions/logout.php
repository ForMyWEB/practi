<?php
session_start();
session_unset();
session_destroy();
header("Location: /../htdocs/pages/login.php");
exit;
?>
