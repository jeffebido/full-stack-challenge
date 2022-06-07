<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/bootstrap.css')); ?>">
    

    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendors/iconly/bold.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendors/bootstrap-icons/bootstrap-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/app.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('admin/assets/images/favicon.svg')); ?>" type="image/x-icon">

    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css" rel="stylesheet"/>
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="<?php echo e(route('admin.dashboard')); ?>"><img src="<?php echo e(asset('img/leospa-logo.png')); ?>" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        
                        <li
                            class="sidebar-item  <?php if(Route::is('admin.dashboard')): ?> active <?php endif; ?>">
                            <a href="<?php echo e(route('admin.dashboard')); ?>" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        

                        
                        <li
                            class="sidebar-item   <?php if(Route::is('admin.contacts')): ?> active <?php endif; ?>">
                            <a href="<?php echo e(route('admin.contacts')); ?>" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Contacts</span>
                            </a>
                        </li>

                        <li
                            class="sidebar-item   <?php if(Route::is('admin.appointments')): ?> active <?php endif; ?>">
                            <a href="<?php echo e(route('admin.appointments')); ?>" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Appointments</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item   <?php if(Route::is('admin.testimonials')): ?> active <?php endif; ?>">
                            <a href="<?php echo e(route('admin.testimonials')); ?>" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Testimonials</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
            <?php echo $__env->yieldContent('content'); ?>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy;</p>
                    </div>
                    <div class="float-end">
                        <p>Desenvolvico com <span class="text-danger"><i class="bi bi-heart"></i></span> por  <a
                                href="https://github.com/jeffebido" target="_blank">Jefferson Oliveira</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?php echo e(asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/bootstrap.bundle.min.js')); ?>"></script>
    
    

    <script src="<?php echo e(asset('admin/assets/js/mazer.js')); ?>"></script>
</body>

</html>
<?php /**PATH /var/www/html/full-stack-challenge/resources/views/admin/layout/main.blade.php ENDPATH**/ ?>