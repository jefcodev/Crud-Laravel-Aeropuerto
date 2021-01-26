<div class="form-group {{ $errors->has('codigo_vuelo') ? 'has-error' : ''}}">
    <label for="codigo_vuelo" class="control-label">{{ 'Codigo Vuelo' }}</label>
    <input class="form-control" name="codigo_vuelo" type="text" id="codigo_vuelo" value="{{ isset($vuelo->codigo_vuelo) ? $vuelo->codigo_vuelo : ''}}" >
    {!! $errors->first('codigo_vuelo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('plazas_vacias') ? 'has-error' : ''}}">
    <label for="plazas_vacias" class="control-label">{{ 'Plazas Vacias' }}</label>
    <input class="form-control" name="plazas_vacias" type="number" id="plazas_vacias" value="{{ isset($vuelo->plazas_vacias) ? $vuelo->plazas_vacias : ''}}" >
    {!! $errors->first('plazas_vacias', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('plazas_ocupadas') ? 'has-error' : ''}}">
    <label for="plazas_ocupadas" class="control-label">{{ 'Plazas Ocupadas' }}</label>
    <input class="form-control" name="plazas_ocupadas" type="number" id="plazas_ocupadas" value="{{ isset($vuelo->plazas_ocupadas) ? $vuelo->plazas_ocupadas : ''}}" >
    {!! $errors->first('plazas_ocupadas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vuelo_directo') ? 'has-error' : ''}}">
    <label for="vuelo_directo" class="control-label">{{ 'Vuelo Directo' }}</label>
    <input class="form-control" name="vuelo_directo" type="text" id="vuelo_directo" value="{{ isset($vuelo->vuelo_directo) ? $vuelo->vuelo_directo : ''}}" >
    {!! $errors->first('vuelo_directo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vuelo_escala') ? 'has-error' : ''}}">
    <label for="vuelo_escala" class="control-label">{{ 'Vuelo Escala' }}</label>
    <input class="form-control" name="vuelo_escala" type="text" id="vuelo_escala" value="{{ isset($vuelo->vuelo_escala) ? $vuelo->vuelo_escala : ''}}" >
    {!! $errors->first('vuelo_escala', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha_vuelo') ? 'has-error' : ''}}">
    <label for="fecha_vuelo" class="control-label">{{ 'Fecha Vuelo' }}</label>
    <input class="form-control" name="fecha_vuelo" type="datetime-local" id="fecha_vuelo" value="{{ isset($vuelo->fecha_vuelo) ? $vuelo->fecha_vuelo : ''}}" >
    {!! $errors->first('fecha_vuelo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
