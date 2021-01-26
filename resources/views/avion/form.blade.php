<div class="form-group {{ $errors->has('placa_avi') ? 'has-error' : ''}}">
    <label for="placa_avi" class="control-label">{{ 'Numero Placa' }}</label>
    <input class="form-control" name="placa_avi" type="text" id="placa_avi" value="{{ isset($avion->placa_avi) ? $avion->placa_avi : ''}}" >
    {!! $errors->first('placa_avi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('capacidad_avi') ? 'has-error' : ''}}">
    <label for="capacidad_avi" class="control-label">{{ 'Nombre Avion' }}</label>
    <input class="form-control" name="capacidad_avi" type="number" id="capacidad_avi" value="{{ isset($avion->capacidad_avi) ? $avion->capacidad_avi : ''}}" >
    {!! $errors->first('capacidad_avi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fk_aerolinea_id_alinea') ? 'has-error' : ''}}">
    <label for="fk_aerolinea_id_alinea" class="control-label">{{ 'Aerolinea' }}</label>
    <input class="form-control" name="fk_aerolinea_id_alinea" type="text" id="fk_aerolinea_id_alinea" value="{{ isset($avion->fk_aerolinea_id_alinea) ? $avion->fk_aerolinea_id_alinea : ''}}" >
    {!! $errors->first('fk_aerolinea_id_alinea', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
