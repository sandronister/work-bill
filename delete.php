<?php

require_once "di/order.php";

try {
    $controller = OrderDI::create();
    $controller->delete_order();
    header("Location: list.php");
} catch (Exception $e) {
    $message = $e->getMessage();
    header("Location: error.php?message=" . urlencode($message));
    exit();
}