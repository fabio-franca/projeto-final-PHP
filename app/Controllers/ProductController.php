<?php

namespace App\Controllers;

use App\Libraries\Datatables; // Datatables
use App\Controllers\LoginController;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    
    private $model;
    
    public function __construct()
    {
        $this->model = new ProductModel();
    }

    public function listProducts()
    {

        # Verifica se existe alguem logado
        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }
       	
        # Objetos criados para o controlador atual
        $datatable = new DataTables();

                
        # Rendereização dos escripts de JS E CSS
        $this->setJs($datatable->render()['js']);
        $this->setCss($datatable->render()['css']);
        $this->setJs(base_url() . "/public/services/example/index.js");

        $data['title'] = "Lista de Produtos";
        $data['result'] = $this->model->find();

        # Carregamento da view...
        echo $this->load("products", "list", $data);      
    }

    public function editProduct($id)
    {
        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }
        $data['title'] = "Edição de Produtos";
        $data['result'] = $this->model->find($id); 

        echo $this->load("products", "insert_update", $data); 
    }

    public function insertProduct(){
        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }
        //return view("products/insert");
        $data['title'] = "Inserção de Produtos";  
       
        $formularioLimpo['product_name'] = '';
        $formularioLimpo['product_code'] = '';
        $formularioLimpo['product_price'] = '';
        $formularioLimpo['product_stock'] = '';

        $data['result'] = $formularioLimpo;

        # Carregamento da view...
        echo $this->load("products", "insert_update", $data); 
    }

    public function save(){

        $request = \Config\Services::request();

        $data = $request->getPost();

        //var_dump($data);
        $this->model->save($data);

        $this->setMessage("success", "Produto salvo com sucesso!"); 

        return redirect()->to('produtos/lista');

    }

    public function deleteProduct(){
        
        $request = \Config\Services::request();
        $data = $request->getPost();
        //$id = $data['id'];
        $this->model->delete($data['id']);
        $this->setMessage("success", "Produto excluído com sucesso!"); 
        return redirect()->to('produtos/lista');
    }

}


