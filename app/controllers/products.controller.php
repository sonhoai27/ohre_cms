<?php
class ProductsController extends BaseController {

    function index()
    {
        // TODO: Implement index() method.
    }

    function product(){
        $model = $this->model;

        $page = isset($_GET['page'])?$_GET['page'] : 1;

        $this->view->data['category'] = $model->get("menu")->getChild();
        $responseFromAPI = $model->get("product")->getAll($page);
        $this->view->data['products'] = $responseFromAPI->products;
        $this->view->data['shops'] = $model->get("shop")->getAll();
        $pg = new Pagination(20,$responseFromAPI->numRows, $page,BASE_URL."products/product");
        $this->view->data['pagination'] = $pg->pagi();

        $this->view->render("products/products.product");
        $this->renderView("main", "footer");
    }

    function group(){
        $this->view->render("products/products.group");
        $this->renderView("main", "footer");
    }
    function detail_handle(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if($_POST != null){
                $model  = $this->model;
                $listProducts = $model->get("product")->detail($_POST['id']);
                $productDetail = $listProducts->products;
                $productSimiler = $listProducts->similarProducts;
                $htmlRender = '<div class="content-wrapper" id="child-product-content">';
                $htmlRender .= '<div class="row">';

                $htmlRender .= '<div class="col-sm-6">';
                $htmlRender .= '<img src="'.RESOURCE.$productDetail->product_avatar.'" class="img-fluid">';
                $htmlRender .= '</div>';//col-6

                $htmlRender .= '<div class="col-sm-6">';
                $htmlRender .= '<h3 class="content-header-title mb-0 d-inline-block">'.$productDetail->product_name.'</h3>';
                $htmlRender .= '<p><span class="text-bold-600">Giá</span>: '.$productDetail->product_price.'</p>';
                $htmlRender .= '<span class="text-bold-600" style="margin-right: 16px">'.$productDetail->shop_name.'</span>';
                $htmlRender .= '<img width="16%" style="margin-right: 16px" class="img-fluid" src="'.RESOURCE.$productDetail->shop_avatar.'">';
                $htmlRender .= '<span><a class="btn btn-success btn-sm" target="_blank" href="'.$productDetail->product_url_website.'">Đến nơi bán</a></span>';
                $htmlRender .= '</div>';//col-6
                $htmlRender .= '</div>';//row

                $htmlRender .= '<div class="row">';
                $htmlRender .=$this->renderListProduct($productSimiler);
                $htmlRender .= '</div>';//row

                $htmlRender .= '</div>';//div
                echo $htmlRender;
            }else {
                print_r(json_encode(array(
                    "status"=>403
                )));
            }
        }
    }

    private function renderListProduct($data = array()){
        $colProduct = "";
        foreach ($data as $item){
            $colProduct .= '<div class="col-sm-3">';
            $colProduct .= '<div class="card">';
            $colProduct .= '<div class="card-content">';
            $colProduct .="<img src='".RESOURCE.$item->product_avatar."' class='card-img-top img-fluid'>";
            $colProduct .="<div class='card-body'>";
            $colProduct .="<h6 class='card-title'>".$item->product_name."</h6>";
            $colProduct .= '<span class="text-bold-600" style="margin-right: 16px">'.$item->shop_name.'</span>';
            $colProduct .= '<img width="16%" style="margin-right: 16px" class="img-fluid" src="'.RESOURCE.$item->shop_avatar.'">';
            $colProduct .= '<span><a class="btn btn-success btn-sm" target="_blank" href="'.$item->product_url_website.'">Đến nơi bán</a></span>';
            $colProduct .= '<p class="text-bold-500">'.$item->product_price.'</p>';
            $colProduct .= '</div>';//card-body
            $colProduct .= '</div>';//card-content
            $colProduct .= '</div>';//card
            $colProduct .= '</div>';//div
        }

        return $colProduct;
    }
}