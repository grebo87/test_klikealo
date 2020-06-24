<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left">Usuarios</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo e(base_url('users/create')); ?>">Nuevo Usuario</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
		<?php if (isset($_SESSION['message'])) : ?>
		    <div class="alert alert-<?php echo e($_SESSION['alert']); ?>">

		        <p><?= $_SESSION['message'] ?></p>
		    </div>
		<?php endif ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
				<?php echo $__env->make('users/table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

    <script type="text/javascript">
		$(document).ready( function () {
		    $('#users-table').DataTable();
		} );
    </script>
<?php $__env->stopPush(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/test_codeigniter/app/Views/users/index.blade.php ENDPATH**/ ?>