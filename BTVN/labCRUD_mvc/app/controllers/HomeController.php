<?php
require_once APP_ROOT.'/app/services/productService.php';
class HomeController{
    public function index(){
    $productService=new ProductService();
    $products=$productService->getProducts();
    require_once APP_ROOT.'/app/views/home/index.php';
}
}
