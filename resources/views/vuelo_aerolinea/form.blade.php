<div class="form-group {{ $errors->has('codigo_vuelo') ? 'has-error' : ''}}">
    <label for="codigo_vuelo" class="control-label">{{ 'Codigo Vuelo' }}</label>
    <input class="form-control" name="codigo_vuelo" type="text" id="codigo_vuelo" value="{{ isset($vuelo_aerolinea->codigo_vuelo) ? $vuelo_aerolinea->codigo_vuelo : ''}}" >
    {!! $errors->first('codigo_vuelo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('codigo_aerolinea') ? 'has-error' : ''}}">
    <label for="codigo_aerolinea" class="control-label">{{ 'Codigo Aerolinea' }}</label>
    <input class="form-control" name="codigo_aerolinea" type="text" id="codigo_aerolinea" value="{{ isset($vuelo_aerolinea->codigo_aerolinea) ? $vuelo_aerolinea->codigo_aerolinea : ''}}" >
    {!! $errors->first('codigo_aerolinea', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
