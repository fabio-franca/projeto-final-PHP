<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Loja - PowerSystem</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?=base_url();?>/public/dist/startbootstrap/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand text-primary" href="<?=base_url()?>">PowerSystemStore</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?=base_url()?>">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Acesso</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?=base_url().'/clientes/inserir'?>">Cliente</a></li>
                                <li><a class="dropdown-item" href="<?=base_url().'/dashboard/'?>">Funcionário</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Carrinho
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Cadastro de Cliente</h1>
      </div><!-- /.col -->

    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container">
    <!-- Tabela de resultados -->
    <div class="card">
      <div class="card-header bg-gradient-secondary">
        <h3 class="card-title">
       
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

        <form action="<?= base_url(); ?>/clientes/salvar" method="POST">
            <div class="card-body">
              <div class="row">
                          <div class="col-md-8">
                              <div class="row">
                                  <div class="col-md-7">
                                      <label> Nome Cliente: <span class="text-danger">*</span></label><br>
                                      <input type="text" name="client_name" class="form-control" required placeholder="Digite o nome" maxlength="50"><br>
                                  </div>
                                  <div class="col-md-5">
                                      <label> CPF: <span class="text-danger">*</span></label><br>
                                      <input type="text" name="client_cpf" class="form-control" required placeholder="Digite o CPF" maxlength="15"><br>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col">
                                      <label> Endereço: <span class="text-danger">*</span></label><br>
                                      <input type="text" name="client_adddress" class="form-control" required placeholder="Digite o endereço" maxlength="50"><br>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-4">
                                      <label> Telefone: <span class="text-danger">*</span></label><br>
                                      <input type="text" name="client_phone" class="form-control" required placeholder="(XX) XXXXX-XXXX" maxlength="20"><br>
                                  </div>
                                  <div class="col-md-4">
                                      <label> Tipo Plano: <span class="text-danger">*</span></label><br>
                                      <select name="client_type" id="" class="form-select">
                                          <option value="bronze">Bronze</option>
                                          <option value="prata">Prata</option>
                                          <option value="ouro">Ouro</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 p-4">
                              <div class="row border rounded">
                                  <h5 class="text-center text-primary">Acesso</h5>
                                  <hr>
                                  <div class="col-md-12">
                                      <label> E-mail: <span class="text-danger">*</span></label><br>
                                      <input type="email" name="client_email" class="form-control" required placeholder="Digite o e-mail" maxlength="50"><br>
                                  </div>

                                  <div class="col-md-12">
                                      <label> Senha: <span class="text-danger">*</span></label><br>
                                      <input type="password" name="client_password" class="form-control" required placeholder="Digite o e-mail" maxlength="50"><br>
                                  </div>   
                              </div>   
                          </div>						  							  							    	
                <div class="col-md-12">
                  <button type="submit" class="btn btn-success"> Enviar Dados </button>
                </div>
              </div>	
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</section>

    <!-- Footer-->
    <footer class="py-5 bg-dark mt-5">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; PowerSystem 2023</p></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?=base_url();?>/public/dist/startbootstrap/js/scripts.js"></script>
</body>
</html>
