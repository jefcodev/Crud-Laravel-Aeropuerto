<div class="form-group {{ $errors->has('codigo_aero') ? 'has-error' : ''}}">
    <label for="codigo_aero" class="control-label">{{ 'Codigo Aeropuerto' }}</label>
    <input class="form-control" name="codigo_aero" type="text" id="codigo_aero" value="{{ isset($aeropuerto->codigo_aero) ? $aeropuerto->codigo_aero : ''}}">
    {!! $errors->first('codigo_aero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre_aero') ? 'has-error' : ''}}">
    <label for="nombre_aero" class="control-label">{{ 'Nombre Aeropuerto' }}</label>
    <input class="form-control" name="nombre_aero" type="text" id="nombre_aero" value="{{ isset($aeropuerto->nombre_aero) ? $aeropuerto->nombre_aero : ''}}">
    {!! $errors->first('nombre_aero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ciudad_aero') ? 'has-error' : ''}}">
    <label for="ciudad_aero" class="control-label">{{ 'Ciudad Aeropuerto' }}</label>
    <input class="form-control" name="ciudad_aero" type="text" id="ciudad_aero" value="{{ isset($aeropuerto->ciudad_aero) ? $aeropuerto->ciudad_aero : ''}}">
    {!! $errors->first('ciudad_aero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pais_aero') ? 'has-error' : ''}}">
    <label for="pais_aero" class="control-label">{{ 'Pais Aeropuerto' }}</label>
    <input class="form-control" name="pais_aero" type="text" id="pais_aero" value="{{ isset($aeropuerto->pais_aero) ? $aeropuerto->pais_aero : ''}}">
    {!! $errors->first('pais_aero', '<p class="help-block">:message</p>') !!}
</div>




<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>