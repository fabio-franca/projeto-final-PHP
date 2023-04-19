<?php

namespace App\Controllers;

use App\Libraries\Datatables; // Datatables
use App\Controllers\LoginController;
use App\Models\SupplierModel;
use \stdClass;


class SupplierController extends BaseController
{
    
    private $model;
    
    public function __construct()
    {
        $this->model = new SupplierModel();
    }

    public function listSuppliers()
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

        $data['title'] = "Lista de Fornecedores";
        $data['result'] = $this->model->find();

        # Carregamento da view...
        echo $this->load("suppliers", "list", $data);    
    
    
    }

    public function editSupplier($id)
    {
        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }

        $data['title'] = "Edição de Fornecedores";
        $data['result'] = $this->model->find($id);        
        echo $this->load("suppliers", "insert_update", $data); 
    }

    public function insertSupplier(){
        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }
        
        $data['title'] = "Inserção de Fornecedores";
       
        $formularioLimpo['supplier_description'] = '';
        $formularioLimpo['supplier_cnpj'] = '';
        $formularioLimpo['supplier_email'] = '';
        $formularioLimpo['supplier_phone'] = '';
        $formularioLimpo['supplier_address'] = '';

        $data['result'] = $formularioLimpo;

        # Carregamento da view...
        echo $this->load("suppliers", "insert_update", $data); 
    }

    public function save(){

        $request = \Config\Services::request();

        $data = $request->getPost();

        //var_dump($data);
        $this->model->save($data);

        $this->setMessage("success", "Fornecedor salvo com sucesso!"); 

        return redirect()->to('fornecedores/lista');

    }

    public function deleteSupplier(){
        
        $request = \Config\Services::request();
        $data = $request->getPost();
        //$id = $data['id'];
        $this->model->delete($data['id']);
        $this->setMessage("success", "Fornecedor excluído com sucesso!"); 
        return redirect()->to('fornecedores/lista');
    }

}


