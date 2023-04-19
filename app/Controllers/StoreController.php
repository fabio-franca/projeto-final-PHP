<?php

namespace App\Controllers;
use App\Models\ProductModel;

class StoreController extends BaseController
{
    
    private $model;

    public function __construct()
    {
        $this->model = new ProductModel();
    }

    public function index() {

        $data['result'] = $this->model->find();

        # Carregamento da view...
        echo $this->store("template_store", "index", $data); 
    }

    public function cart() {
        $data = array();

        
    }
}


