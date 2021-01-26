<div class="form-group {{ $errors->has('id_pasajero') ? 'has-error' : ''}}">
    <label for="id_pasajero" class="control-label">{{ 'Id Pasajero' }}</label>
    <input class="form-control" name="id_pasajero" type="text" id="id_pasajero" value="{{ isset($usuario->id_pasajero) ? $usuario->id_pasajero : ''}}" >
    {!! $errors->first('id_pasajero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombres_pasajero') ? 'has-error' : ''}}">
    <label for="nombres_pasajero" class="control-label">{{ 'Nombres Pasajero' }}</label>
    <input class="form-control" name="nombres_pasajero" type="text" id="nombres_pasajero" value="{{ isset($usuario->nombres_pasajero) ? $usuario->nombres_pasajero : ''}}" >
    {!! $errors->first('nombres_pasajero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellidos_pasajero') ? 'has-error' : ''}}">
    <label for="apellidos_pasajero" class="control-label">{{ 'Apellidos Pasajero' }}</label>
    <input class="form-control" name="apellidos_pasajero" type="text" id="apellidos_pasajero" value="{{ isset($usuario->apellidos_pasajero) ? $usuario->apellidos_pasajero : ''}}" >
    {!! $errors->first('apellidos_pasajero', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
