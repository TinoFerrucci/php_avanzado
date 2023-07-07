<?php
// Resetea la session
session_start();
session_destroy();
header('Location: unidad8.php')
?>