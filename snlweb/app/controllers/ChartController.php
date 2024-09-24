<?php
require_once __DIR__ . '/../models/ChartModel.php';
require_once __DIR__ . '/../../core/Database.php';


class ChartController {
    private $model;

    public function __construct() {
        
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new ChartModel($db);
    }

  
    public function index() {
       
       

        $chartData = $this->model->getChartData();
        include_once __DIR__ . '/../views/ChartProductionView.php';
    }
}
?>