<?= $this->section('content'); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <!-- <h1 class="m-0">Titulo</h1> -->
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active"> Relatório </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Tabela de resultados -->
    <div class="card">
      <div class="card-header bg-gradient-secondary">
        <h3 class="card-title">
            <?= $teste = (isset($result["id_user"]))? 'Atualização ': 'Cadastro '; ?> de Usuário
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

        <form action="<?= base_url(); ?>/usuarios/salvar" method="POST">
          <div class="card-body row">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Nome</label>
              <input type="text" class="form-control" id="exampleInputEmail1" 
                placeholder="Digite o dado" name="user_name" 
                value="<?= $result["user_name"]; ?>" required>
            </div>

            <div class="form-group col-md-4">
              <label for="exampleInputEmail1">E-mail</label>
              <input type="email" class="form-control" id="exampleInputEmail1" 
                placeholder="Digite o dado" name="user_email"
                value="<?= $result["user_email"]; ?>"  required>
            </div>

            <div class="form-group col-md-2">
              <label for="exampleInputEmail1">Senha</label>
              <input type="password" class="form-control" id="exampleInputEmail1" 
                placeholder="Digite o dado" name="user_password"
                value="<?= $result["user_password"]; ?>"  required>
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">CPF</label>
              <input type="text" class="form-control" id="exampleInputEmail1" 
                placeholder="Digite o dado" name="user_cpf" 
                value="<?= $result["user_cpf"] ?>" required>
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Telefone</label>
              <input type="number" class="form-control" id="exampleInputEmail1" 
                placeholder="Digite o dado" name="user_phone"
                value="<?= $result["user_phone"]; ?>" required>
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Endereço</label>
              <input type="text" class="form-control" id="exampleInputEmail1" 
                placeholder="Digite o dado" name="user_adddress"
                value="<?= $result["user_adddress"]; ?>" required>
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Tipo</label>
              <input type="text" class="form-control" id="exampleInputEmail1" 
                placeholder="Digite o dado" name="user_type"
                value="<?= $result["user_type"]; ?>" required>
            </div>

            <input type="hidden" name="id_user" 
            value="<?= (isset($result["id_user"]))? $result["id_user"]: ''; ?>">

          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        
      </div>

    </div>
  </div>

</section>
<!-- /.content -->
<?= $this->endSection(); ?>