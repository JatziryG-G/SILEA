<?php
session_start();
require_once __DIR__ . '/../productos.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = (int) $_POST['id'];

    // Buscar el producto en la lista
    foreach ($productos as $producto) {
        if ($producto['id'] == $id) {
            // Si no existe carrito aún
            if (!isset($_SESSION['carrito'])) {
                $_SESSION['carrito'] = [];
            }

            // Verifica si ya está en el carrito
            $encontrado = false;
            foreach ($_SESSION['carrito'] as &$item) {
                if ($item['id'] == $id) {
                    $item['cantidad']++;
                    $encontrado = true;
                    break;
                }
            }

            // Si no estaba en el carrito, agrégalo
            if (!$encontrado) {
                $_SESSION['carrito'][] = [
                    'id' => $producto['id'],
                    'nombre' => $producto['nombre'],
                    'precio' => $producto['precio'],
                    'imagen' => $producto['imagen'],
                    'cantidad' => 1
                ];
            }

            break;
        }
    }
}

header('Location: cart.php');
exit;

