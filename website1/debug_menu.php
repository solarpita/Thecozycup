<?php
require_once __DIR__ . '/../app/Config/Database.php';
require_once __DIR__ . '/../app/Models/Menu.php';

use App\Models\Menu;

$menu = new Menu();
$stmt = $menu->readAll();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "Total Items: " . count($items) . "\n";
foreach ($items as $item) {
    echo "Name: " . $item['name'] . ", Image: [" . $item['image'] . "]\n";
}
