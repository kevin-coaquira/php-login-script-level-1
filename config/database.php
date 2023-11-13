<?php
// Clase utilizada para obtener la conexión a la base de datos PostgreSQL
class Database {
    // Especifique sus propias credenciales de base de datos
    private $host = "adminer.randion.es";
    private $port = "5432";
    private $db_name = "kcoaquira_login_system";
    private $username = "kcoaquirachoquecallata";
    private $password = "Secretos.2023";
    public $conn;

    // Obtener la conexión a la base de datos
    public function getConnection() {
        $this->conn = null;
        try {
            // Use el controlador pgsql para PostgreSQL
            $this->conn = new PDO("pgsql:host=" . $this->host . ";port=" . $this->port .";dbname=" . $this->db_name, $this->username, $this->password);
            // Establecer el modo de error PDO a excepción
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>