<div class="form-group {{ $errors->has('codigo_aeropuerto') ? 'has-error' : ''}}">
    <label for="codigo_aeropuerto" class="control-label">{{ 'Codigo Aeropuerto' }}</label>
    <input class="form-control" name="codigo_aeropuerto" type="text" id="codigo_aeropuerto" value="{{ isset($aeropuerto_avion->codigo_aeropuerto) ? $aeropuerto_avion->codigo_aeropuerto : ''}}" >
    {!! $errors->first('codigo_aeropuerto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numero_placa') ? 'has-error' : ''}}">
    <label for="numero_placa" class="control-label">{{ 'Numero Placa' }}</label>
    <input class="form-control" name="numero_placa" type="text" id="numero_placa" value="{{ isset($aeropuerto_avion->numero_placa) ? $aeropuerto_avion->numero_placa : ''}}" >
    {!! $errors->first('numero_placa', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
