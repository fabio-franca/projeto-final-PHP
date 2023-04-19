<?php

namespace App\Controllers;

use App\Libraries\Datatables; // Datatables
use App\Controllers\LoginController;
use App\Models\LoginModel;

class PerfilController extends BaseController
{

    private $model = array();
    private $session = null;

    public function __construct()
    {
        $this->model = new LoginModel();
    }

    
    public function index()
    {

        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }

        # Objetos criados para o controlador atual
        $datatable = new DataTables();

        $dados = $this->model->where("id_user", $_SESSION['sistema']['id_usuario'])->findAll();

        # Retorno de dados para a view
        $data['title'] = "Perfil";
        $data['result'] = $dados;
        
         # Rendereização dos escripts de JS E CSS
         $this->setJs($datatable->render()['js']);
         $this->setCss($datatable->render()['css']);
         $this->setJs(base_url() . "/public/services/example/index.js");

        # Carregamento da view
        echo $this->load("perfil", "index", $data);
    }

    public function editar(){

        //print_r($_POST);
        if(!empty($_POST['user_password'])){
            $_POST['user_password'] = sha1($_POST['user_password']);
        }else{
            unset($_POST['user_password']);
        }

        //$login = new LoginModel();
        # Atualizando os dados do elemento
        $this->model->update(['id_user'=>$_POST['id_user']], $_POST);


        $this->setMessage("success", "Dados alterados com sucesso!");

        return redirect()->to('/dashboard/perfil/');
    }

}
