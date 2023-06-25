<?php
class BaseController
{
    //Đường dẫn Thư mục view
    const PATH_VIEW = "Views";
    public $categoryModel;
    public $bannerModel;
    public $menu;
    public function __construct()
    {
        require_once(PATH . "/Models/Category.php");
        $this->categoryModel = new Category();
        require_once(PATH . "/Models/banner.php");
        $this->bannerModel = new banner();
    }
    public function view($layout = null, $view = null, array $data = [])
    {
        $banner = $this->bannerModel->getbanner(1);
        $menu = $this->categoryModel->getMenu(1);
        $menu2 = $this->categoryModel->getMenu(2);
        $menu3 = $this->categoryModel->getMenu(3);
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        $view = $this->getPath($view);
        require_once $this->getPath($layout);
    }

    // $path = News.category;
    private function getPath($path)
    {
        $path = str_replace(".", "/", $path);
        // News/category
        $path = self::PATH_VIEW . "/" . $path . ".php";
        // Views/News.category.php
        return $path;
    }
}
