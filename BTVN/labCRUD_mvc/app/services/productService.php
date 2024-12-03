<?php
require_once APP_ROOT.'/app/models/products.php';
class ProductService{
    public function getProducts(){
        try{
            $conn=new PDO('mysql:host=localhost;dbname=btvn','root','');
            $sql="SELECT * FROM products ";
            $stmt=$conn->query($sql);
            $products = [];
            foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
                $products[] = new Products($row['id'],$row['name'], $row['price']);
            } 
            return $products;
        }catch(Exception $e){
            echo $e->getMessage();
        }

    }
    public function addProduct($name, $price){
        try{
            $conn=new PDO('mysql:host=localhost;dbname=btvn','root','');
            $sql="INSERT INTO products (name, price) VALUES (:name, :price)";
            $stmt=$conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->execute();
            return true;
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
    public function selectId($id){
        try{
            $conn=new PDO('mysql:host=localhost;dbname=btvn','root','');
            $sql="SELECT * FROM products WHERE id = :id";
            $stmt=$conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return new Products($row['id'],$row['name'], $row['price']);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
    public function updateProduct($id, $name, $price){
        try{
            $conn=new PDO('mysql:host=localhost;dbname=btvn','root','');
            $sql="UPDATE products SET name = :name, price = :price WHERE id = :id";
            $stmt=$conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->execute();
            return true;
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
    public function deleteProduct($id){
        try{
            $conn=new PDO('mysql:host=localhost;dbname=btvn','root','');
            $sql="DELETE FROM products WHERE id = :id";
            $stmt=$conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

}
