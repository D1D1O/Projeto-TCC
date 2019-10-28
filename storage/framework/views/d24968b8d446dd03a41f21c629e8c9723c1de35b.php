<?php $__env->startSection('content'); ?>
 <!-- <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">  -->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="user-wrapper">
                <ul class="users">
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="unip2">
				
			
                    <li class="user" id="<?php echo e($user->id); ?>">
                        <?php if($user->unread): ?>
                            <span class="pending"><?php echo e($user->unread); ?></span>
                        <?php endif; ?> 
                        <div class="media">

                            <div class="media-left">
                                <img src="<?php echo e($user->avatar); ?>" alt="" class="media-object">
                            </div>

                            <div class="media-body">
                                <p class="name"><?php echo e($user->name); ?></p>
                               <!--  <p class="name"><?php echo e($user->id); ?></p> -->
                                <p class="email"><?php echo e($user->email); ?></p> 
                            </div>

                        </div>
                    </li>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </ul>
            </div>
        </div>


        <div class="col-md-8" id="messages">
            
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.padrao', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>