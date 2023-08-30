 
 

<?php $__env->startSection('content'); ?>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
              <div class="card-body">
    <h1>Posts</h1>
    
    <table class="table" border="1">
        <thead>
            <tr><th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Published At</th>
                <th colspan="2"><center>Actions</center></th>
            </tr>
        </thead>


<?php 
$data
?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php echo e($users->name); ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr><td><?php echo e($posts->id); ?></td>
                    <td><?php echo e($posts->title); ?></td>
                    <td><?php echo e($posts->content); ?></td>
                    <td><?php echo e($posts->published_at); ?></td>

                    <td><a href = 'edit/<?php echo e($posts->id); ?>' style="color: white"> <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i>update</button> </a></td>
                <td> <a href = 'delete/<?php echo e($posts->id); ?>'><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button> </a></td>
              
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECTS\LARAVEL\Blog\resources\views/viewposts.blade.php ENDPATH**/ ?>