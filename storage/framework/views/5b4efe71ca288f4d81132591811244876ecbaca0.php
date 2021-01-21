<?php $__env->startSection('title', "Referrals || e-earners"); ?>

<?php $__env->startSection('breadtitle', "My Referrals"); ?>

<?php $__env->startSection('breadli'); ?>
<li class="breadcrumb-item active">Referrals</li>               
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
         
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Level One Referrals</h4>
                              
                                <div class="table-responsive">
                                    <table id="one" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>level</th>
                                                <th>Joined</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $ones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $one): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($one->name); ?></td>
                                                <td><?php echo e($one->username); ?></td>
                                                <td><?php echo e($one->level); ?></td>
                                                <td><?php echo e(date("d-M-Y", strtotime($one->created_at))); ?></td>
                                            </tr>

                          
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
  
  
  <!-- level two -->

  <?php if($twos->count()): ?>
         
         <div class="card">
             <div class="card-body">
                 <h4 class="card-title">Level Two Referrals</h4>
               
                 <div class="table-responsive">
                     <table id="two" class="table table-bordered table-striped">
                         <thead>
                             <tr>
                                 <th>Name</th>
                                 <th>Username</th>
                                 <th>level</th>
                                 <th>Joined</th>
                             </tr>
                         </thead>
                         <tbody>
                         <?php $__currentLoopData = $twos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $two): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                                 <td><?php echo e($two->name); ?></td>
                                 <td><?php echo e($two->username); ?></td>
                                 <td><?php echo e($two->level); ?></td>
                                 <td><?php echo e(date("d-M-Y", strtotime($two->created_at))); ?></td>
                             </tr>

           
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
<?php endif; ?>

<!-- level three -->

<?php if($threes->count()): ?>
         
         <div class="card">
             <div class="card-body">
                 <h4 class="card-title">Level Three Referrals</h4>
               
                 <div class="table-responsive">
                     <table id="three" class="table table-bordered table-striped">
                         <thead>
                             <tr>
                                 <th>Name</th>
                                 <th>Username</th>
                                 <th>level</th>
                                 <th>Joined</th>
                             </tr>
                         </thead>
                         <tbody>
                         <?php $__currentLoopData = $threes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $three): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                                 <td><?php echo e($three->name); ?></td>
                                 <td><?php echo e($three->username); ?></td>
                                 <td><?php echo e($three->level); ?></td>
                                 <td><?php echo e(date("d-M-Y", strtotime($three->created_at))); ?></td>
                             </tr>

           
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
<?php endif; ?>

<!-- level four -->


<?php if($fours->count()): ?>
         
         <div class="card">
             <div class="card-body">
                 <h4 class="card-title">Level Four Referrals</h4>
               
                 <div class="table-responsive">
                     <table id="three" class="table table-bordered table-striped">
                         <thead>
                             <tr>
                                 <th>Name</th>
                                 <th>Username</th>
                                 <th>level</th>
                                 <th>Joined</th>
                             </tr>
                         </thead>
                         <tbody>
                         <?php $__currentLoopData = $fours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $four): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                                 <td><?php echo e($four->name); ?></td>
                                 <td><?php echo e($four->username); ?></td>
                                 <td><?php echo e($four->level); ?></td>
                                 <td><?php echo e(date("d-M-Y", strtotime($four->created_at))); ?></td>
                             </tr>

           
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
<?php endif; ?>



<?php if($fives->count()): ?>
         
         <div class="card">
             <div class="card-body">
                 <h4 class="card-title">Level Five Referrals</h4>
               
                 <div class="table-responsive">
                     <table id="three" class="table table-bordered table-striped">
                         <thead>
                             <tr>
                                 <th>Name</th>
                                 <th>Username</th>
                                 <th>level</th>
                                 <th>Joined</th>
                             </tr>
                         </thead>
                         <tbody>
                         <?php $__currentLoopData = $fives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $five): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                                 <td><?php echo e($five->name); ?></td>
                                 <td><?php echo e($five->username); ?></td>
                                 <td><?php echo e($five->level); ?></td>
                                 <td><?php echo e(date("d-M-Y", strtotime($five->created_at))); ?></td>
                             </tr>

           
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
<?php endif; ?>



<?php if($sixs->count()): ?>
         
         <div class="card">
             <div class="card-body">
                 <h4 class="card-title">Level Six Referrals</h4>
               
                 <div class="table-responsive">
                     <table id="three" class="table table-bordered table-striped">
                         <thead>
                             <tr>
                                 <th>Name</th>
                                 <th>Username</th>
                                 <th>level</th>
                                 <th>Joined</th>
                             </tr>
                         </thead>
                         <tbody>
                         <?php $__currentLoopData = $sixs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $six): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                                 <td><?php echo e($six->name); ?></td>
                                 <td><?php echo e($six->username); ?></td>
                                 <td><?php echo e($six->level); ?></td>
                                 <td><?php echo e(date("d-M-Y", strtotime($six->created_at))); ?></td>
                             </tr>

           
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>