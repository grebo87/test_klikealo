<!-- Nombre Field -->
<div class="form-group">
    <label for="">Nombre:</label>
    <p><?php echo e($user['name']); ?></p>
</div>

<!-- Surnames Field -->
<div class="form-group">
    <label for="">Apellidos:</label>
    <p><?php echo e($user['surnames']); ?></p>
</div>

<!-- Email Field -->
<div class="form-group">
    <label for="">Correo electrónico:</label>
    <p><?php echo e($user['email']); ?></p>
</div>

<!-- Phone Field -->
<div class="form-group">
    <label for="">Teléfono:</label>
    <p><?php echo e($user['phone']); ?></p>
</div>

<!-- status Field -->
<div class="form-group">
     <label for="">Estado:</label>
    <?php if($user['status'] == true): ?>
        <span class="label label-success">Activo</span>
    <?php else: ?>
        <span class="label label-danger">Desactivo</span>
    <?php endif; ?>
</div>


<?php /**PATH /home/vagrant/code/test_codeigniter/app/Views/users/show_fields.blade.php ENDPATH**/ ?>