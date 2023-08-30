<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <a href="<?php echo e(url('/view')); ?>" >
<div class="form-group">
        <button type="submit" class="btn btn-primary">My Posts</button>
    </div>
   </a><br><br>
            <div class="card">
              <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>


                      <h1>Create New Post</h1>
                    <form method="POST" action="<?php echo e(url('/store-post')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" name="title" class="form-control<?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('title')); ?>" required>

                            <?php if($errors->has('title')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('title')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div><br>

                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea id="content" name="content" class="form-control<?php echo e($errors->has('content') ? ' is-invalid' : ''); ?>" rows="9" required><?php echo e(old('content')); ?></textarea>

                            <?php if($errors->has('content')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('content')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div><br>
                       

                        <div class="form-group">
                            <label for="published_at">Published At (Optional)</label>
                            <input id="published_at" type="datetime-local" name="published_at" class="form-control<?php echo e($errors->has('published_at') ? ' is-invalid' : ''); ?>" value="<?php echo e(old('published_at')); ?>">

                            <?php if($errors->has('published_at')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('published_at')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div><br>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECTS\LARAVEL\Blog\resources\views/home.blade.php ENDPATH**/ ?>