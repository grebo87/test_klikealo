<!-- Nombre Field -->
<div class="form-group">
    <label for="">Nombre:</label>
    <p>{{ $user['name'] }}</p>
</div>

<!-- Surnames Field -->
<div class="form-group">
    <label for="">Apellidos:</label>
    <p>{{ $user['surnames'] }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    <label for="">Correo electrónico:</label>
    <p>{{ $user['email'] }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    <label for="">Teléfono:</label>
    <p>{{ $user['phone'] }}</p>
</div>

<!-- status Field -->
<div class="form-group">
     <label for="">Estado:</label>
    @if ($user['status'] == true)
        <span class="label label-success">Activo</span>
    @else
        <span class="label label-danger">Desactivo</span>
    @endif
</div>


