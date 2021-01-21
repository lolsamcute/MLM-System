<?php $__env->startSection('title', "referrals not activated || e-earners"); ?>

<?php $__env->startSection('breadtitle', "Pending Activation"); ?>

<?php $__env->startSection('breadli'); ?>
<li class="breadcrumb-item active">not activated</li>               
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Your referrals yet to activate</h4>
                              
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Username</th>
                                             
                                                <th>Joined</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($user->name); ?></td>
                                                <td><?php echo e($user->username); ?></td>
                                              
                                                <td><?php echo e(date("m/d/y g:i A", strtotime($user->created_at))); ?></td>
                                            </tr>

                          
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>