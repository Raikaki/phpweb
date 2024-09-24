<?php
require_once '../app/controllers/ChartController.php';

// Khởi tạo controller và gọi phương thức index
$controller = new ChartController();
$controller->index();
