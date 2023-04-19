<?=$this->section('content');?>
  <!-- Content Header (Page header) -->
  <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><?= $title ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Painel de Controle</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h4><strong><?=$products?></strong></h4>
              <p>Produtos</p>
            </div>
            <div class="icon">
              <span class="iconify" data-icon="fa6-solid:box-open"></span>
            </div>
            <a href="#" class="small-box-footer">Ver mais <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div> 
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h4><strong><?=$suppliers?></strong></h4>
              <p>Fornecedores</p>
            </div>
            <div class="icon">
              <span class="iconify" data-icon="fa6-solid:truck"></span>
            </div>
            <a href="#" class="small-box-footer">Ver mais <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div> 
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h4><strong><?=$clients?></strong></h4>
              <p>Clientes</p>
            </div>
            <div class="icon">
              <span class="iconify" data-icon="fa6-solid:person"></span>
            </div>
            <a href="#" class="small-box-footer">Ver mais <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div> 
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h4><strong><?=$users?></strong></h4>
              <p>Usuários</p>
            </div>
            <div class="icon">
              <span class="iconify" data-icon="fa6-solid:users"></span>
            </div>
            <a href="#" class="small-box-footer">Ver mais <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div> 
      </div>
      <!-- /.row -->
      <!-- Main row -->
      
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

<?=$this->endSection(); ?>