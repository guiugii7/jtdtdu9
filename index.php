<?php
// Создаем ассоциативный массив, представляющий информацию о продуктах в магазине
$продукты = [
    "Молоко" => 1.50,
    "Яйца" => 2.00,
    "Хлеб" => 2.50,
    "Сыр" => 3.00,
    "Колбаса" => 3.50,
];

// Находим продукт с самой высокой ценой
$producto_mas_caro = null;
$precio_mas_caro = 0;
foreach ($productos as $producto => $precio) {
    if ($precio > $precio_mas_caro) {
        $producto_mas_caro = $producto;
        $precio_mas_caro = $precio;
    }
}

// Выводим результат
echo "Товар с самой высокой ценой: $producto_mas_caro";
?>