<!-- name Field -->
<div class="form-group col-sm-6">
    <label for="name" class="col-sm-1 control-label">Nombre:</label>
    <input type="tetx" name="name" class="form-control" id="name" required  data-msg="la verga">
</div>

<!-- Surnames Field -->
<div class="form-group col-sm-6">
    <label for="surnames" class="col-sm-1 control-label">Apellidos:</label>
    <input type="tetx" name="surnames" class="form-control" id="surnames">
</div>

<!-- phone Field -->
<div class="form-group col-sm-6">
    <label for="phone">Teléfono:</label>
    <input type="text" name="phone" id="phone" class="form-control">
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <label for="email">Correo electrónico:</label>
    <input type="email" name="email" class="form-control" id="email" required>
</div>

<!-- password Field -->
<div class="form-group col-sm-6">
    <label for="password">Contraseña</label>
    <input type="password" name="password" class="form-control" id="password" required>
</div>

<!-- password_confirmation Field -->
<div class="form-group col-sm-6">
    <label for="password">Repetir Contraseña</label>
    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" >
</div>

<!-- status Field -->
<div class="form-group col-sm-6">
    <label for="status">Estado:</label>
    <label class="checkbox-inline">
        <input name="status" type="hidden" value="0" id="status">
        <input checked="checked" name="status" type="checkbox" value="1" id="status"> Activo
    </label>
</div>

<br>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="<?php echo e(base_url('users')); ?>" class="btn btn-default">Cancelar</a>
</div>

<?php /**PATH /home/vagrant/code/test_codeigniter/app/Views/users/fields.blade.php ENDPATH**/ ?>