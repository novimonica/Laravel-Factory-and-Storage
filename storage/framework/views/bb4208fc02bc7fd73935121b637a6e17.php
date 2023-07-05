<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i>Data Master</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                
                <ul class="navbar-nav flex-row flex-wrap">
                    
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link active">Home</a></li>
                    
                    
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('employees.index')); ?>" class="nav-link">Employee List</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">
                
                
                <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i>My Profile</a>
            </div>
        </div>
    </nav>

    
    <div class="container mt-4">
        <h4><?php echo e($pageTitle); ?></h4>
        <hr>
        
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0">Well done! this is <?php echo e($pageTitle); ?>.</h4>
        </div>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</body>
</html>
<?php /**PATH D:\ITTS\KULIAH\Semester 4\Pemograman Framework\Modul4\Laravel-Modul4\resources\views/home.blade.php ENDPATH**/ ?>