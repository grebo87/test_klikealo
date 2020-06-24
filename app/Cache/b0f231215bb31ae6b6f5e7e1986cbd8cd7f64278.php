<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Usuario
        </h1>
    </section>
    <div class="content">
        <?php if (! empty($errors)) : ?>
    <div class="alert alert-danger">
    <?php foreach ($errors as $field => $error) : ?>
        <p><?= $error ?></p>
    <?php endforeach ?>
    </div>
<?php endif ?>

        <div class="box box-primary">
            <div class="box-body">
                <form action="<?php echo e(base_url('users/store')); ?>" id="userForm" method="POST" >
                    <?php echo $__env->make('users/fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

    <script type="text/javascript">
        let validator = $("#userForm").validate({
            rules: {
                password: "required",
                password_confirmation: {
                    equalTo: "#password"
                },
                phone: "number"
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test_codeigniter/app/Views/users/create.blade.php ENDPATH**/ ?>