<?php $__env->startSection('title', "Payment || e-earners"); ?>

<?php $__env->startSection('breadtitle', "Withdrawal Request"); ?>

<?php $__env->startSection('breadli'); ?>
<li class="breadcrumb-item active">Withdrawal</li>               
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
                    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Withdrawal Request</h4>
                                <h6 class="card-subtitle">Pay every 24hrs</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Amount</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                               
                                                <th>Phone</th>
                                                <th>Level</th>
                                                <th>Balance</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($user->name); ?></td>
                                                <td>₦<?php echo e(!$user ? 0 : number_format($user->amount)); ?></td>
                                               
                                                <td><?php echo e($user->username); ?></td>
                                                <td><?php echo e($user->email); ?></td>
                                                <td><?php echo e($user->phone); ?></td>
                                                <td><?php echo e($user->level); ?></td>
                                                <td>₦<?php echo e(!$user ? 0 : number_format($user->balance)); ?></td>
                                                <td>
                                                <button  data-toggle="modal" data-target="#daModal<?php echo e($user->id); ?>" class="btn btn-success btn-sm"><i class="fa fa-lg fa-eye"></i></button>
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
                                            <form method="post" action="/payment/<?php echo e($user->trans_id); ?>">
                                            <div class="modal-body">
                                                
                                                        <?php echo csrf_field(); ?>

                                                                <h5>Bank name:&nbsp;  <?php echo e($user->bank_name); ?></h5>
                                                                <h5>Account name: &nbsp; <?php echo e($user->account_name); ?></h5>
                                                                <h5>Account no:&nbsp; <b> <?php echo e($user->account_no); ?></b></h5>
                                                                <h5>Username:&nbsp;  <?php echo e($user->username); ?></h5>
                                                                <h5>Amount:&nbsp;   <?php echo e($user->amount); ?></h5>
                                            
                                                    
                                                    <div class="form-group">
                                                       
                                                        <input type="text" class="form-control" name="username" value="<?php echo e($user->username); ?>" hidden>
                                                    </div>
                                                                                            

                                                 <span class="text-danger">Ensure user has been paid before payment confirmation!! </span>  
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger waves-effect waves-light">Confirm payment has been made!</button>
                                             
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