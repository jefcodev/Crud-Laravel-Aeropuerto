<div class="form-group {{ $errors->has('codigo_vuelo') ? 'has-error' : ''}}">
    <label for="codigo_vuelo" class="control-label">{{ 'Codigo Vuelo' }}</label>
    <input class="form-control" name="codigo_vuelo" type="text" id="codigo_vuelo" value="{{ isset($vuelo_avion->codigo_vuelo) ? $vuelo_avion->codigo_vuelo : ''}}" >
    {!! $errors->first('codigo_vuelo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numero_placa') ? 'has-error' : ''}}">
    <label for="numero_placa" class="control-label">{{ 'Numero Placa' }}</label>
    <input class="form-control" name="numero_placa" type="text" id="numero_placa" value="{{ isset($vuelo_avion->numero_placa) ? $vuelo_avion->numero_placa : ''}}" >
    {!! $errors->first('numero_placa', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
