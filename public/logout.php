<?php
session_start();
// Encerra a sessão
session_destroy();
// Redireciona para a página de login
header("location: login.php");
exit;
?>