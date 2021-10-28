<?php
    require_once('connection.php'); //Importo mi conexión

    class product extends Connection{

        public function __construct() {
            $this->db = parent::__construct();
        }

        public function get(){
            $rows = null;
            $statement = $this->db->prepare('SELECT pid, title, cost, price, visible FROM products');
            $statement->execute();
            while($result = $statement->fetch()){
                $rows[] = $result;
            }
            return $rows;
        }

        public function getByID($PID){
            $rows = null;
            $statement = $this->db->prepare('SELECT * FROM products WHERE PID = :PID');
            $statement->bindParam(':PID', $PID);
            $statement->execute();
            while($result = $statement->fetch()){
                $rows[] = $result;
            }
            return $rows;
        }

        public function add($title, $description, $content, $cost, $price, $reseller_price, $wholesaler_price){
            $statement = $this->db->prepare("INSERT INTO products (title, description, content, cost, price, reseller_price, wholesaler_price) VALUES (:title, :description, :content, :cost, :price, :reseller_price, :wholesaler_price)");
            $statement->bindParam(':title', $title);
            $statement->bindParam(':description', $description);
            $statement->bindParam(':content', $content);
            $statement->bindParam(':cost', $cost);
            $statement->bindParam(':price', $price);
            $statement->bindParam(':reseller_price', $reseller_price);
            $statement->bindParam(':wholesaler_price', $wholesaler_price);
            if ($statement->execute()) {
                header('Location: ../view/viewProducts.php');
            }
        }

        public function update($title, $description, $content, $cost, $price, $reseller_price, $wholesaler_price, $PID) {
            $statement = $this->db->prepare('UPDATE products SET title = :title, description = :description, content = :content, cost = :cost, price = :price, reseller_price = :reseller_price, wholesaler_price = :wholesaler_price WHERE PID = :PID');
            $statement->bindParam(':title', $title);
            $statement->bindParam(':description', $description);
            $statement->bindParam(':content', $content);
            $statement->bindParam(':cost', $cost);
            $statement->bindParam(':price', $price);
            $statement->bindParam(':reseller_price', $reseller_price);
            $statement->bindParam(':wholesaler_price', $wholesaler_price);
            $statement->bindParam(':PID', $PID);
            if ($statement->execute()){
                header('Location: ../view/viewProducts.php');
            }
        }

        public function delete($PID){
            $statement = $this->db->prepare('DELETE FROM products WHERE PID = :PID');
            $statement->bindParam(':PID', $PID);
            if ($statement->execute()) {
                header('Location: ../view/viewProducts.php');
            }
        }
    }
?>