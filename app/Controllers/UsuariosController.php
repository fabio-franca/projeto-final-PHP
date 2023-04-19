<?php

namespace App\Controllers;

use App\Libraries\Datatables; // Datatables
use App\Controllers\LoginController;
use App\Models\RelatoriosModel;
use App\Models\UsuariosModel;
use App\Models\FiliaisModel;
use App\Models\SetoresModel;
use App\Models\LoginModel;
use CodeIgniter\I18n\Time;

class UsuariosController extends BaseController
{

    private $model = array();
    private $session = null;

    
    public function __construct(){
        $this->model = new UsuariosModel;
    }


    public function lista()
    {

        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }

        # Objetos criados para o controlador atual
        $datatable = new DataTables();
        

        $dados = $this->model->orderBy("user_name")->findAll();

        # Retorno de dados para a view
        $data['title'] = "Lista de Usuarios";
        $data['result'] = $dados;

        
        # Rendereização dos escripts de JS E CSS
        $this->setJs($datatable->render()['js']);
        $this->setCss($datatable->render()['css']);
        $this->setJs(base_url() . "/public/services/relatorios/usuarios.js");

        # Carregamento da view
        echo $this->load("usuarios", "list", $data);
    }

    public function editUser($id)
    {
        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }

        $data['title'] = "Edição de Usuário";
        $data['result'] = $this->model->find($id);        
        echo $this->load("usuarios", "insert_update", $data); 
    }

    public function insertUser(){
        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }
        
        $data['title'] = "Inserção de Usuário";
       
        $formularioLimpo['user_name'] = '';
        $formularioLimpo['user_cpf'] = '';
        $formularioLimpo['user_email'] = '';
        $formularioLimpo['user_password'] = '';
        $formularioLimpo['user_phone'] = '';
        $formularioLimpo['user_type'] = '';
        $formularioLimpo['user_adddress'] = '';

        $data['result'] = $formularioLimpo;

        # Carregamento da view...
        echo $this->load("usuarios", "insert_update", $data); 
    }

    public function save(){

        $request = \Config\Services::request();

        $data = $request->getPost();

        //var_dump($data);
        $this->model->save($data);

        $this->setMessage("success", "Usuário salvo com sucesso!"); 

        return redirect()->to('usuarios/lista');

    }

    public function deleteUser(){
        
        $request = \Config\Services::request();
        $data = $request->getPost();

        $this->model->delete($data['id']);
        $this->setMessage("success", "Usuário excluído com sucesso!"); 
        return redirect()->to('usuarios/lista');
    }

}
