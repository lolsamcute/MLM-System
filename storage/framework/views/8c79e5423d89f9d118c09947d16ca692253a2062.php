<?php $__env->startSection('title', "Transactions || e-earners"); ?>

<?php $__env->startSection('breadtitle', "Transactions"); ?>

<?php $__env->startSection('breadli'); ?>
<li class="breadcrumb-item active">transactions</li>               
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
                 <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <div class="card mt-5">
                            <div class="card-body">
                                <h4 class="card-title">Transactions</h4>
                                <h6 class="card-subtitle">incoming and outgoing</h6>
                                <div class="table-responsive ">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <th>Username</th>
                                                <th>Type</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $trans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                            <td><?php echo e($tran->username); ?></td>
                                                <td><?php echo e($tran->type); ?></td>
                                                <td><?php echo e($tran->amount); ?></td>
                                                <td><?php echo e($tran->status); ?></td>
                                                <td><?php echo e($tran->created_at); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>