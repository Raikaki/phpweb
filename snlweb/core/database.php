<?php
class Database {
    private $host = "118.69.11.60"; // Thay bằng tên server của bạn
    private $db_name = "SNLV"; // Thay bằng tên database của bạn
    private $username = "kerp"; // Username
    private $password = "KsystemSun&L123!@#"; // Password
    public $conn;
    public function getConnection() {
        $this->conn = null;

       
        $connection = [
            "Database" => $this->db_name,
            "Uid" => $this->username,
            "PWD" => $this->password
        ];

        try {
           
            $this->conn = sqlsrv_connect($this->host . ",14233", $connection);
            
            if($this->conn) {
              
            } else {
                echo "Lỗi kết nối: " . print_r(sqlsrv_errors(), true);
            }
        } catch (Exception $e) {
            echo "Connection error: " . $e->getMessage();
        }
        
        return $this->conn;
    }


}

?>