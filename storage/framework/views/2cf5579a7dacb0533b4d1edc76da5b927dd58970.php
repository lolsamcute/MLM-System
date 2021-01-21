<?php $__env->startSection('title', "Profile || e-earners"); ?>

<?php $__env->startSection('breadtitle', "Profile"); ?>

<?php $__env->startSection('breadli'); ?>
<li class="breadcrumb-item active">profile</li>               
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="../assets/images/users/default.png" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10"><?php echo e(Auth::user()->name); ?></h4>
                                    <h6 class="card-subtitle"><?php echo e(Auth::user()->username); ?></h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><font class="font-medium">Level</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"></i> <font class="font-medium"><?php echo e(Auth::user()->level); ?></font></a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><?php echo e(Auth::user()->email); ?></h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6><?php echo e(Auth::user()->phone); ?></h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6><?php echo e(Auth::user()->address ? Auth::user()->address : "Nil"); ?></h6>
                                <small class="text-muted p-t-30 db">State</small>
                                <h6><?php echo e(Auth::user()->state ? Auth::user()->state : "Nil"); ?></h6>
                                <small class="text-muted p-t-30 db">Country</small>
                                <h6><?php echo e(Auth::user()->country ? Auth::user()->country : "Nil"); ?></h6>
                                 <small class="text-muted p-t-30 db">Social Profile</small>
                                <br/>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Edit Profile</a> </li>
                                
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                
                                <!--second tab-->
                              
                                <div class="tab-pane active" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material" method="post" action="/profile/<?php echo e(Auth::id()); ?>">
                                        <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="name" value="<?php echo e(Auth::user()->name); ?>" placeholder="Johnathan Doe" class="form-control form-control-line">
                                                </div>
                                            </div>
                                          
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="<?php echo e(Auth::user()->phone); ?>" name="phone" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Address</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="<?php echo e(Auth::user()->address); ?>" name="address" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">State</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="<?php echo e(Auth::user()->state); ?>" name="state" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Country</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="<?php echo e(Auth::user()->country); ?>" name="country" class="form-control form-control-line">
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>            


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>