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
            <?= $teste = (isset($result["id_supplier"]))? 'Atualização ': 'Cadastro '; ?> de Fornecedor
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

        <form action="<?= base_url(); ?>/fornecedores/salvar" method="POST">
          <div class="card-body row">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Descrição</label>
              <input type="text" class="form-control" id="exampleInputEmail1" 
                placeholder="Digite o dado" name="supplier_description" 
                value="<?= $result["supplier_description"]; ?>" required>
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">CNPJ</label>
              <input type="text" class="form-control" id="exampleInputEmail1" 
                placeholder="Digite o dado" name="supplier_cnpj" 
                value="<?= $result["supplier_cnpj"] ?>" required>
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">E-mail</label>
              <input type="email" class="form-control" id="exampleInputEmail1" 
                placeholder="Digite o dado" name="supplier_email"
                value="<?= $result["supplier_email"]; ?>"  required>
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Telefone</label>
              <input type="number" class="form-control" id="exampleInputEmail1" 
                placeholder="Digite o dado" name="supplier_phone"
                value="<?= $result["supplier_phone"]; ?>" required>
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Endereço</label>
              <input type="text" class="form-control" id="exampleInputEmail1" 
                placeholder="Digite o dado" name="supplier_address"
                value="<?= $result["supplier_address"]; ?>" required>
            </div>

            <input type="hidden" name="id_supplier" 
            value="<?= (isset($result["id_supplier"]))? $result["id_supplier"]: ''; ?>">

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