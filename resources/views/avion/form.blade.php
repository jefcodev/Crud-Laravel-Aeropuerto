<div class="form-group {{ $errors->has('numero_placa') ? 'has-error' : ''}}">
    <label for="numero_placa" class="control-label">{{ 'Numero Placa' }}</label>
    <input class="form-control" name="numero_placa" type="text" id="numero_placa" value="{{ isset($avion->numero_placa) ? $avion->numero_placa : ''}}" >
    {!! $errors->first('numero_placa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre_avion') ? 'has-error' : ''}}">
    <label for="nombre_avion" class="control-label">{{ 'Nombre Avion' }}</label>
    <input class="form-control" name="nombre_avion" type="text" id="nombre_avion" value="{{ isset($avion->nombre_avion) ? $avion->nombre_avion : ''}}" >
    {!! $errors->first('nombre_avion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('capacidad') ? 'has-error' : ''}}">
    <label for="capacidad" class="control-label">{{ 'Capacidad' }}</label>
    <input class="form-control" name="capacidad" type="number" id="capacidad" value="{{ isset($avion->capacidad) ? $avion->capacidad : ''}}" >
    {!! $errors->first('capacidad', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
