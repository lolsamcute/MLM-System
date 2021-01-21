<?php $__env->startSection('title', "Pending || e-earners"); ?>

<?php $__env->startSection('breadtitle', "Pending Activation"); ?>

<?php $__env->startSection('breadli'); ?>
<li class="breadcrumb-item active">pending</li>               
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
                 <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pending Users</h4>
                                <h6 class="card-subtitle">Total Users: <?php echo e($allusers); ?> </h6>
                                <h6 class="card-subtitle">Activated:  <?php echo e($activated); ?> </h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Joined</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($user->name); ?></td>
                                                <td><?php echo e($user->email); ?></td>
                                                <td><?php echo e($user->username); ?></td>
                                                <td><?php echo e($user->created_at); ?></td>
                                                <td>
                                                <button  data-toggle="modal" data-target="#daModal<?php echo e($user->id); ?>" class="btn btn-warning btn-sm">Activate</button>
                                                </td>
                                            </tr>

                                            <!-- modal -->
                                <div id="daModal<?php echo e($user->id); ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Activate user</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <form method="post" action="/activate-user">
                                            <div class="modal-body">
                                                
                                                        <?php echo csrf_field(); ?>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Username:</label>
                                                        <input type="text" class="form-control" name="username" value="<?php echo e($user->username); ?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Referrer</label>
                                                        <input type="text" class="form-control" name="by"id="recipient-name" value="<?php echo e($user->referrer); ?>" readonly>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger waves-effect waves-light">Activate User</button>
                                             
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>