<?php
session_start();

if (!isset($_GET['id'], $_GET['accion'])) {
    header('Location: cart.php');
    exit;
}

$id = $_GET['id'];
$accion = $_GET['accion'];

if (isset($_SESSION['carrito'][$id])) {
    if ($accion == 'sumar') {
        $_SESSION['carrito'][$id]['cantidad']++;
    } elseif ($accion == 'restar') {
        $_SESSION['carrito'][$id]['cantidad']--;
        if ($_SESSION['carrito'][$id]['cantidad'] <= 0) {
            unset($_SESSION['carrito'][$id]);
        }
    }
}

header('Location: cart.php');
exit;
?>
