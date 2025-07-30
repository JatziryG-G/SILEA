<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = (int) $_POST['id'];

    if (isset($_SESSION['carrito'])) {
        foreach ($_SESSION['carrito'] as $index => $item) {
            if ($item['id'] == $id) {
                unset($_SESSION['carrito'][$index]);
                // Reindexar el array para evitar huecos
                $_SESSION['carrito'] = array_values($_SESSION['carrito']);
                break;
            }
        }
    }
}

header('Location: cart.php');
exit;

