<?php $__env->startSection('title', "App accounts || e-earners"); ?>

<?php $__env->startSection('breadtitle', "Company Accounts"); ?>

<?php $__env->startSection('breadli'); ?>
<li class="breadcrumb-item active">app_accounts</li>               
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Company Accounts</h4>
                                <button data-toggle="modal" data-target="#create" class="btn btn-info btn-sm"><i class="fa fa-plus-circle"></i> Add New</button>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Account Name</th>
                                                <th>Account No</th>
                                                <th>Bank Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($account->account_name); ?></td>
                                                <td><?php echo e($account->account_no); ?></td>
                                                <td><?php echo e($account->bank_name); ?></td>
                                                <td>
                                                <button  data-toggle="modal" data-target="#daModal<?php echo e($account->id); ?>" class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></button>
                                                <a  data-toggle="modal" data-target="#delete<?php echo e($account->id); ?>" class="btn btn-outline-danger text-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>

                                            <!-- modal -->
                    <div id="daModal<?php echo e($account->id); ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Account</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <form method="post" action="/app-accounts/<?php echo e($account->id); ?>">
                                            <div class="modal-body">
                                                
                                                        <?php echo csrf_field(); ?>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Account Name:</label>
                                                        <input type="text" class="form-control" name="account_name" value="<?php echo e($account->account_name); ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Account Number</label>
                                                        <input type="text" class="form-control" name="account_no" id="recipient-name" value="<?php echo e($account->account_no); ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Bank Name</label>
                                                        <input type="text" class="form-control" name="bank_name" id="recipient-name" value="<?php echo e($account->bank_name); ?>">
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
                                             
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                 <div id="delete<?php echo e($account->id); ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Account</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <form method="get" action="/app-accounts/<?php echo e($account->id); ?>">
                                            <div class="modal-body">
                                                
                                                        <?php echo csrf_field(); ?>

                                                    <div class="alert alert-danger" role="alert">
                                                        Are you sure you want to delete <?php echo e($account->account_no); ?>?
                                                    </div>
                                                 
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                                             
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
                       
                        <div id="create" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add New Account</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <form method="post" action="/app-accounts">
                                            <div class="modal-body">
                                                
                                                        <?php echo csrf_field(); ?>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Account Name:</label>
                                                        <input type="text" class="form-control" name="account_name" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Account Number</label>
                                                        <input type="text" class="form-control" name="account_no" id="recipient-name" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Bank Name</label>
                                                        <input type="text" class="form-control" name="bank_name" id="recipient-name" >
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                                             
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>