<div class="form-group {{ $errors->has('codigo_aerolinea') ? 'has-error' : ''}}">
    <label for="codigo_aerolinea" class="control-label">{{ 'Codigo Aerolinea' }}</label>
    <input class="form-control" name="codigo_aerolinea" type="text" id="codigo_aerolinea" value="{{ isset($aerolinea->codigo_aerolinea) ? $aerolinea->codigo_aerolinea : ''}}" >
    {!! $errors->first('codigo_aerolinea', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre_aerolinea') ? 'has-error' : ''}}">
    <label for="nombre_aerolinea" class="control-label">{{ 'Nombre Aerolinea' }}</label>
    <input class="form-control" name="nombre_aerolinea" type="text" id="nombre_aerolinea" value="{{ isset($aerolinea->nombre_aerolinea) ? $aerolinea->nombre_aerolinea : ''}}" >
    {!! $errors->first('nombre_aerolinea', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pais_aerolinea') ? 'has-error' : ''}}">
    <label for="pais_aerolinea" class="control-label">{{ 'Pais Aerolinea' }}</label>
    <input class="form-control" name="pais_aerolinea" type="text" id="pais_aerolinea" value="{{ isset($aerolinea->pais_aerolinea) ? $aerolinea->pais_aerolinea : ''}}" >
    {!! $errors->first('pais_aerolinea', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
