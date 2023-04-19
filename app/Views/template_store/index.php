<?php 
    #$data = array();

    #$data = '0';

    $data = '0';

    if (isset($_POST["Submit"])){
        $data = $_POST['contador']+=1;
    }
?>
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
                    <a href="#" class="d-block"> <?= isset($_SESSION['site'])? $_SESSION['site']['usuario'] : '' ?></a>      
                    <form class="d-flex" method="POST">
                        <input type="hidden" name="contador" value="<?php echo isset($_POST['contador']) ? $_POST['contador'] : 0; ?>">
                        <button class="btn btn-outline-dark" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Carrinho
                            <span class="badge bg-dark text-white ms-1 rounded-pill"><?php echo $data ?></span>
                        </button>
                    
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder text-uppercase">Confira nossos produtos</h1>
                    <!-- <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p> -->
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php foreach ($result as $r) : ?>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="https://source.unsplash.com/450x300/?product/<?=$r['id_product'];?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?= $r['product_name']; ?></h5>
                                        <!-- Product price-->
                                        <h4 class="text-success"><?= 'R$ ' . number_format($r['product_price'], 2, ',', '.'); ?></h4>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <button class="btn btn-outline-primary mt-auto" type="submit" name="Submit">
                                            Comprar
                                        </button>
                                        <!-- <a class="btn btn-outline-primary mt-auto" href="#">Comprar</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </form> 
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; PowerSystem 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?=base_url();?>/public/dist/startbootstrap/js/scripts.js"></script>
    </body>
</html>
