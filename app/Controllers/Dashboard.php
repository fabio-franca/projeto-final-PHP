<?php

namespace App\Controllers;
use App\Controllers\LoginController;
use App\Models\ClientModel;
use App\Models\ProductModel;
use App\Models\SupplierModel;
use App\Models\UsuariosModel;

class Dashboard extends BaseController
{

    public function index()
    {   
        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }

        $products = new ProductModel();
        $suppliers = new SupplierModel();
        $clients = new ClientModel();
        $users = new UsuariosModel();
        
        $data['title'] = "Painel de Controle";
        $data['products'] = $products->countAll('id_product');
        $data['suppliers'] = $suppliers->countAll('id_supplier');
        $data['clients'] = $clients->countAll('id_client');
        $data['users'] = $users->countAll('id_user');

        echo $this->load("dashboard", "index", $data);
    }

}
