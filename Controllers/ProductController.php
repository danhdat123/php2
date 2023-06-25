<?php

class ProductController extends BaseController
{

    private $productModel;
    public function __construct()
    {
        parent::__construct();
        require_once(PATH . "/Models/Product.php");
        $this->productModel = new Product();
    }

    public function index()
    {

        return $this->view("Layouts.master", "Product.index");
    }



    public function category()
    {
        $cat = $_GET['name'];
        $pid = $this->categoryModel->getidCategory("slug = '$cat'");
        $data = $this->productModel->getProduct_where("parent_id = $pid");
        return $this->view("Layouts.master", "Product.category", ['product' => $data]);
    }
    //show chi tiết sản phẩm
    public function product()
    {
        $id = $_GET['id'];
        $data = $this->productModel->getProduct_id($id);
        return $this->view("Layouts.master", "Product.product", ['a' => $data]);
    }
}
