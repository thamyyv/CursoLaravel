<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <title>Curso Senai</title>
    <link href="<?php echo e(asset('/img/favicon.png')); ?>" rel="icon" type="image/png"/>
    <link href="<?php echo e(asset('/font/css/all.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/css/argon.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/css/select2.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/css/toastr.min.css')); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">
    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body class="vsc-initialized">
<?php echo $__env->make('Layouts.Menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class='main-content'>
    <nav class="navbar navbar-top navbar-expand-md navbar-dark bg-gradient-success p-md-3 p-1 " id="navbar-main" style="z-index: 10">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white d-none d-lg-inline-block"></a>
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <i class='fa fa-user'></i>
                            
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold">Curso</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Bem vindo(a)!</h6>
                        </div>
                        
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ol class="breadcrumb">
        <?php echo $__env->yieldContent('breadcrumb'); ?>
    </ol>
    <div class="container-fluid">
        <?php echo $__env->yieldContent('conteudo'); ?>
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        © 2020
                        <a href="http://senaicurso.com.br" target='_blank'>Senai Curso</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>

<?php /**PATH /var/www/html/CursoLaravel/resources/views/Layouts/LayoutFull.blade.php ENDPATH**/ ?>