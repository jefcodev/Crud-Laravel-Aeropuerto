<div class="form-group {{ $errors->has('codigo_vuelo') ? 'has-error' : ''}}">
    <label for="codigo_vuelo" class="control-label">{{ 'Codigo Vuelo' }}</label>
    <input class="form-control" name="codigo_vuelo" type="text" id="codigo_vuelo" value="{{ isset($vuelo->codigo_vuelo) ? $vuelo->codigo_vuelo : ''}}">
    {!! $errors->first('codigo_vuelo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('hdesp_vuelo') ? 'has-error' : ''}}">
    <label for="hdesp_vuelo" class="control-label">{{ 'Hora Despegue' }}</label>
    <input class="form-control" name="hdesp_vuelo" type="time" id="hdesp_vuelo" value="{{ isset($vuelo->hdesp_vuelo) ? $vuelo->hdesp_vuelo : ''}}">
    {!! $errors->first('hdesp_vuelo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('aero_desp_vuelo') ? 'has-error' : ''}}">
    <label for="aero_desp_vuelo" class="control-label">{{ 'Aeropuerto Despegue' }}</label>
    <input class="form-control" name="aero_desp_vuelo" type="text" id="aero_desp_vuelo" value="{{ isset($avion->aero_desp_vuelo) ? $avion->aero_desp_vuelo : ''}}" >
    {!! $errors->first('aero_desp_vuelo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('hater_vuelo') ? 'has-error' : ''}}">
    <label for="hater_vuelo" class="control-label">{{ 'Hora Aterrisaje' }}</label>
    <input class="form-control" name="hater_vuelo" type="time" id="hater_vuelo" value="{{ isset($vuelo->hater_vuelo) ? $vuelo->hater_vuelo : ''}}">
    {!! $errors->first('hater_vuelo', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('aero_ater_vuelo') ? 'has-error' : ''}}">
    <label for="aero_ater_vuelo" class="control-label">{{ 'Aeropuerto Aterrisaje' }}</label>
    <input class="form-control" name="aero_ater_vuelo" type="text" id="aero_ater_vuelo" value="{{ isset($avion->aero_ater_vuelo) ? $avion->aero_ater_vuelo : ''}}" >
    {!! $errors->first('aero_ater_vuelo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fecha_vuelo') ? 'has-error' : ''}}">
    <label for="fecha_vuelo" class="control-label">{{ 'Fecha Vuelo' }}</label>
    <input class="form-control" name="fecha_vuelo" type="date" id="fecha_vuelo" value="{{ isset($vuelo->fecha_vuelo) ? $vuelo->fecha_vuelo : ''}}">
    {!! $errors->first('fecha_vuelo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pocup_vuelo') ? 'has-error' : ''}}">
    <label for="pocup_vuelo" class="control-label">{{ 'Plasa Ocupada' }}</label>
    <input class="form-control" name="pocup_vuelo" type="number" id="pocup_vuelo" value="{{ isset($vuelo->pocup_vuelo) ? $vuelo->pocup_vuelo : ''}}">
    {!! $errors->first('pocup_vuelo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pvac_vuelo') ? 'has-error' : ''}}">
    <label for="pvac_vuelo" class="control-label">{{ 'Plaza Vacia' }}</label>
    <input class="form-control" name="pvac_vuelo" type="number" id="pvac_vuelo" value="{{ isset($vuelo->pvac_vuelo) ? $vuelo->pvac_vuelo : ''}}">
    {!! $errors->first('pvac_vuelo', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('escala_vuelo') ? 'has-error' : ''}}">
    <label for="escala_vuelo" class="control-label">{{ 'Escala' }}</label>
    <select class="form-control" id="escala_vuelo" name="escala_vuelo" >
        <option value="SI">SI</option>
        <option value="NO">NO</option>
    </select>
    {!! $errors->first('escala_vuelo', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('fk_avion_id_avi') ? 'has-error' : ''}}">
    <label for="fk_avion_id_avi" class="control-label">{{ 'Avion' }}</label>
    <input class="form-control" name="fk_avion_id_avi" type="text" id="fk_avion_id_avi" value="{{ isset($vuelo->fk_avion_id_avi) ? $vuelo->fk_avion_id_avi : ''}}">
    {!! $errors->first('fk_avion_id_avi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Create' }}">
</div>