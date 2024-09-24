<?php
class ChartModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Lấy dữ liệu từ bảng hoặc từ stored procedure
    public function getChartData() {
        // $query = "SELECT project_qty, production_qty, results FROM YourTableName"; // Thay tên bảng của bạn
        // $stmt = $this->conn->prepare($query);
        // $stmt->execute();
        
        // Lấy kết quả dưới dạng mảng
        // return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>