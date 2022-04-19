
<?php $__env->startSection('content'); ?>
<div class="page-heading">
    <h3>Profile Statistics</h3>
</div>

<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Page Views</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($pageViews->views); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Total Leads</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($countContacts + $countAppointments); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Appointments</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($countAppointments); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Contacts</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($countContacts); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">

                <div class="col-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Appointments</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Service</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="<?php echo e(asset('admin/assets/images/faces/3.jpg')); ?>">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0"><?php echo e($item->name); ?></p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0"><?php echo e($item->email); ?></p>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0"><?php echo e($item->service); ?></p>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0"><?php echo e($item->phone); ?></p>
                                                </td>

                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-5">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="<?php echo e(asset('admin/assets/images/faces/1.jpg')); ?>" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold"><?php echo e($user->name); ?></h5>
                            <h6 class="text-muted mb-0"><a href="<?php echo e(route('logout')); ?>" >Logout</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Recent Contacts</h4>
                </div>
                <div class="card-content pb-4">


                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                    

                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="<?php echo e(asset('admin/assets/images/faces/5.jpg')); ?>">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1"><?php echo e($item->name); ?></h5>
                                <h6 class="text-muted mb-0"><?php echo e($item->email); ?></h6>
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class="px-4">
                        <a class='btn btn-block btn-xl btn-light-primary font-bold mt-3' href="<?php echo e(route('admin.contacts')); ?>">Read More</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/full-stack-challenge/resources/views/admin/pages/dashboard.blade.php ENDPATH**/ ?>