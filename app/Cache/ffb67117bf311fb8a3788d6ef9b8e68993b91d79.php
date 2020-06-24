<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Correo electrónico</th>
                <th>Estado</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user['name']); ?></td>
                <td><?php echo e($user['surnames']); ?></td>
                <td><?php echo e($user['phone']); ?></td>
                <td><?php echo e($user['email']); ?></td>
                <td>
                    <?php if($user['status'] == true): ?>
                        <span class="label label-success">Activo</span>
                    <?php else: ?>
                        <span class="label label-danger">Desactivo</span>
                    <?php endif; ?>
                </td>
                <td>
                    <form action="<?php echo e(base_url('users/destroy')); ?>/<?php echo e($user['id']); ?>" method="POST">
                        <div class='btn-group'>
                            <a href="<?php echo e(base_url('users/show')); ?>/<?php echo e($user['id']); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="<?php echo e(base_url('users/edit')); ?>/<?php echo e($user['id']); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('¿Está seguro que desea eliminar el Cliente?"><i class="glyphicon glyphicon-trash"></i></button>
                        </div>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /home/vagrant/code/test_codeigniter/app/Views/users/table.blade.php ENDPATH**/ ?>