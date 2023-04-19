<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
//$routes->setDefaultController('Dashboard');
$routes->setDefaultController('StoreController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

# Rota loja
$routes->get('/', 'StoreController::index');

# Rotas do módulo de Dashboard
$routes->get('/dashboard', 'Dashboard::index'); 
$routes->get('/dashboard', 'LoginController::userLogin'); 

# Usuários 
$routes->get('/usuarios/lista',"UsuariosController::lista");
$routes->get('/usuarios/inserir',"UsuariosController::insertUser");
$routes->post('/usuarios/salvar', 'UsuariosController::save');
$routes->get('/usuarios/editar/(:any)', 'UsuariosController::editUser/$1');
$routes->post('/usuarios/deletar', 'UsuariosController::deleteUser');

# Rotas do módulo de Perfil
$routes->get('/dashboard/perfil', 'PerfilController::index');

# ROTAS DE SISTEMA
$routes->get('/logout', 'LoginController::logout'); 
$routes->post('/logar', 'LoginController::logar'); 
$routes->get('/logar', 'LoginController::logar'); 
$routes->get('/logado', 'LoginController::userLogin'); 

######## ROTA DE PRODUTOS ########
$routes->get('/produtos/lista', 'ProductController::listProducts');
$routes->get('/produtos/inserir', 'ProductController::insertProduct');
$routes->get('/produtos/editar/(:any)', 'ProductController::editProduct/$1');
$routes->post('/produtos/deletar', 'ProductController::deleteProduct');
$routes->post('/produtos/salvar', 'ProductController::save');
$routes->resource('ProductsApi');

######## ROTA DE FORNECEDORES ########
$routes->get('/fornecedores/lista', 'SupplierController::listSuppliers');
$routes->get('/fornecedores/inserir', 'SupplierController::insertSupplier');
$routes->get('/fornecedores/editar/(:any)', 'SupplierController::editSupplier/$1');
$routes->post('/fornecedores/deletar', 'SupplierController::deleteSupplier');
$routes->post('/fornecedores/salvar', 'SupplierController::save');

######## ROTA DE CLIENTES ########
$routes->get('/clientes/lista', 'ClientController::listClients');
$routes->get('/clientes/inserir', 'ClientController::insertClient');
$routes->get('/clientes/editar/(:any)', 'ClientController::editClient/$1');
$routes->post('/clientes/deletar', 'ClientController::deleteClient');
$routes->post('/clientes/salvar', 'ClientController::save');


//$routes->get('datatables', 'Site::generateDatatable');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
