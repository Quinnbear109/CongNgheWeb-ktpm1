<?php
require_once '../app/config/config.php';
require_once APP_ROOT.'/app/services/productService.php';
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Kiểm tra controller và action để gọi controller và action tương ứng
if ($controller == 'home') {
    require_once APP_ROOT.'/app/controllers/HomeController.php';
    $homeController = new HomeController();
    
    // Kiểm tra action và gọi phương thức tương ứng
    if ($action == 'index') {
        $homeController->index();
    } else {
        echo "Action không tồn tại";
    }

} else if ($controller == 'product') {
    require_once APP_ROOT.'/app/controllers/ProductController.php';
    $productController = new ProductController();
    
    // Kiểm tra action và gọi phương thức tương ứng cho controller 'patient'
    if ($action == 'add') {
        $productController->add();
    }elseif($action == 'store')
    {
        $productController->store();

    } 
    elseif($action == 'update')
    {
        $productController->update();

    } 
    elseif ($action == 'edit') {
        $productController->edit();
    } elseif ($action == 'delete') {
        $productController->delete();
    } else {
        echo "Action không tồn tại";
    }

} else {
    echo "Controller không tồn tại";
}
?>
