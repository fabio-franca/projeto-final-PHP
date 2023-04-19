<?php

namespace App\Controllers;

use App\Libraries\Datatables; // Datatables
use App\Controllers\LoginController;
use App\Models\ClientModel;

class ClientController extends BaseController
{
    
    private $model;

    private $session = null;
    public static $sessionName = 'site';
    
    public function __construct()
    {
        $this->model = new ClientModel();
        $this->session = \Config\Services::session();
    }

    public function listClients()
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

        $data['title'] = "Lista de Clientes";
        $data['result'] = $this->model->find();

        # Carregamento da view...
        echo $this->load("clients", "list", $data);    
    }

    public function editClient($id)
    {
        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }

        $data['title'] = "Edição de Cliente";
        $data['result'] = $this->model->find($id);        
        echo $this->load("clients", "insert_update", $data); 
    }

    public function insertClient(){
        $data = array();
        # Carregamento da view...
        echo $this->store_client("clients", "insert", $data); 
    }

    public function save(){
        $request = \Config\Services::request();
        $data = $request->getPost();

        $this->model->save($data);
        $this->setMessage("success", "Cliente salvo com sucesso!"); 

        $client = $data;

        # Carregando os componentes de Helpper do Codeigniter
        helper(['form', 'text']);
        
        //CRIA A SESSÃO
        $sessao = array(
            'logado' => true,
            'usuario' => $client['client_name'],                       
        );

        $this->session->set([self::$sessionName => $sessao]);
        return redirect()->to('/');
    }

    public function deleteClient(){     
        $request = \Config\Services::request();
        $data = $request->getPost();
    
        $this->model->delete($data['id']);
        $this->setMessage("success", "Clientes excluído com sucesso!"); 
        return redirect()->to('clientes/lista');
    }

}


