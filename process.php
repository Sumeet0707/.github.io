<?php
require_once 'Product.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['add'])) {
        $p = new Product();
        $p->title = $_POST['product_title'];
        $p->picture1 = $_POST['product_pic1'];
        $p->picture2 = $_POST['product_pic2'];
        $p->price = $_POST['product_price'];
        $p->status = $_POST['product_status'];
        if($p->addProduct()){
            header("Location: catalogue.php");
        } else {
            header("Location: add.php");
        }
    } else {
        echo "Method unknown";
    }
} else {
    header("Location: catalogue.php");
}
			
			
			