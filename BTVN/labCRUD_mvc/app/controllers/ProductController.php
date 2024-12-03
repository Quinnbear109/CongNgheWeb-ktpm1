<?php
require_once APP_ROOT.'/app/services/productService.php';
class ProductController{
    public function add(){
    require_once APP_ROOT.'/app/views/product/add.php';
}   
    public function store(){
        $name=$_POST['name'];
        $price=$_POST['price'];
        $productService=new ProductService();
        $productService->addProduct($name,$price);
        header('Location:index.php?controller=home&action=index');
        exit();
}
    public function edit(){
        $id=$_GET['id'];
        $productService=new ProductService();
        $product=$productService->selectId($id);
        require_once APP_ROOT.'/app/views/product/update.php';
    }
    public function update(){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $price=$_POST['price'];
        $productService=new ProductService();
        $productService->updateProduct($id,$name,$price);
        header('Location:index.php?controller=home&action=index');
        exit();
        
    }
    public function delete(){
        $id=$_GET['id'];
        $productService=new ProductService();
        $productService->deleteProduct($id);
        header('Location:index.php?controller=home&action=index');
        exit();
    }
}
