<?php

namespace App\Controllers;
use App\Controllers\LoginController;
use App\Models\LoginModel;

class Dashboard extends BaseController
{

    public function index()
    {   
        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }
        
        $data['title'] = "Painel de Controle";
        //$data['user'] = $this->session = \Config\Services::session();
        // //return view('dashboard/index', $data);
        // echo view('templates/head', $data);
        // echo view('templates/header', $data);
        // echo view('templates/sidebar', $data);
        // echo view('dashboard/index');
        // echo view('templates/content', $data);        
        // echo view('templates/footer', $data);

        echo $this->load("dashboard", "index", $data);
    }

}
