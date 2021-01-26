<div class="form-group {{ $errors->has('codigo_alinea') ? 'has-error' : ''}}">
    <label for="codigo_alinea" class="control-label">{{ 'Codigo Aerolinea' }}</label>
    <input class="form-control" name="codigo_alinea" type="text" id="codigo_alinea" value="{{ isset($aerolinea->codigo_alinea) ? $aerolinea->codigo_alinea : ''}}" >
    {!! $errors->first('codigo_alinea', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre_alinea') ? 'has-error' : ''}}">
    <label for="nombre_alinea" class="control-label">{{ 'Nombre Aerolinea' }}</label>
    <input class="form-control" name="nombre_alinea" type="text" id="nombre_alinea" value="{{ isset($aerolinea->nombre_alinea) ? $aerolinea->nombre_alinea : ''}}" >
    {!! $errors->first('nombre_alinea', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pais_alinea') ? 'has-error' : ''}}">
    <label for="pais_alinea" class="control-label">{{ 'Pais Aerolinea' }}</label>
    <input class="form-control" name="pais_alinea" type="text" id="pais_alinea" value="{{ isset($aerolinea->pais_alinea) ? $aerolinea->pais_alinea : ''}}" >
    {!! $errors->first('pais_alinea', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
