<?php

class Database
{
    private $conn;

    public function __construct(DatabaseConnection $databaseConnection) {
        $this->conn = $databaseConnection->getConnection();
    }  
    public function deleteProductBtn($deleteCheckbox) {
        try {
            $placeholders = implode(',', array_fill(0, count($deleteCheckbox), '?'));
            $sql = "DELETE FROM product WHERE product_id IN ($placeholders)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($deleteCheckbox);
            return true;
        } catch(PDOException $e) {
            echo "Unable to delete products: " . $e->getMessage();
            return false;
        }
    }  
}
?>