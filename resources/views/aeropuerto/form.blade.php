<div class="form-group {{ $errors->has('codigo_aeropuerto') ? 'has-error' : ''}}">
    <label for="codigo_aeropuerto" class="control-label">{{ 'Codigo Aeropuerto' }}</label>
    <input class="form-control" name="codigo_aeropuerto" type="text" id="codigo_aeropuerto" value="{{ isset($aeropuerto->codigo_aeropuerto) ? $aeropuerto->codigo_aeropuerto : ''}}" >
    {!! $errors->first('codigo_aeropuerto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre_aeropuerto') ? 'has-error' : ''}}">
    <label for="nombre_aeropuerto" class="control-label">{{ 'Nombre Aeropuerto' }}</label>
    <input class="form-control" name="nombre_aeropuerto" type="text" id="nombre_aeropuerto" value="{{ isset($aeropuerto->nombre_aeropuerto) ? $aeropuerto->nombre_aeropuerto : ''}}" >
    {!! $errors->first('nombre_aeropuerto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ciudad_aeropuerto') ? 'has-error' : ''}}">
    <label for="ciudad_aeropuerto" class="control-label">{{ 'Ciudad Aeropuerto' }}</label>
    <input class="form-control" name="ciudad_aeropuerto" type="text" id="ciudad_aeropuerto" value="{{ isset($aeropuerto->ciudad_aeropuerto) ? $aeropuerto->ciudad_aeropuerto : ''}}" >
    {!! $errors->first('ciudad_aeropuerto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pais_aeropuerto') ? 'has-error' : ''}}">
    <label for="pais_aeropuerto" class="control-label">{{ 'Pais Aeropuerto' }}</label>
    <input class="form-control" name="pais_aeropuerto" type="text" id="pais_aeropuerto" value="{{ isset($aeropuerto->pais_aeropuerto) ? $aeropuerto->pais_aeropuerto : ''}}" >
    {!! $errors->first('pais_aeropuerto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('hora_despegue') ? 'has-error' : ''}}">
    <label for="hora_despegue" class="control-label">{{ 'Hora Despegue' }}</label>
    <input class="form-control" name="hora_despegue" type="datetime-local" id="hora_despegue" value="{{ isset($aeropuerto->hora_despegue) ? $aeropuerto->hora_despegue : ''}}" >
    {!! $errors->first('hora_despegue', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('hora_aterrizaje') ? 'has-error' : ''}}">
    <label for="hora_aterrizaje" class="control-label">{{ 'Hora Aterrizaje' }}</label>
    <input class="form-control" name="hora_aterrizaje" type="datetime-local" id="hora_aterrizaje" value="{{ isset($aeropuerto->hora_aterrizaje) ? $aeropuerto->hora_aterrizaje : ''}}" >
    {!! $errors->first('hora_aterrizaje', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
