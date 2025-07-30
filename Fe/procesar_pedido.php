<?php
session_start();

file_put_contents('pedido_debug.txt', print_r($_POST, true));

unset($_SESSION['carrito']);

header('Location: gracias.php');
exit;
