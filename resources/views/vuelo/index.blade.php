@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Vuelo</div>
                <div class="card-body">
                    <a href="{{ url('/vuelo/create') }}" class="btn btn-success btn-sm" title="Add New vuelo">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>

                   

                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Codigo Vuelo</th>
                                    <th>Hora Despegue</th>
                                    <th>Aeropuerto  Despegue</th>
                                    <th>Hora Aterrizaje</th>
                                    <th>Aeropuerto Aterrizaje</th>
                                    <th>Fecha Vuelo</th>
                                    <th>Plazas Ocupadas</th>
                                    <th>Plazas Vacias</th>
                                    <th>Escala</th>
                                    <th>Avion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vuelo as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->codigo_vuelo }}</td>
                                    <td>{{ $item->hdesp_vuelo }}</td>
                                    <td>{{ $item->aero_desp_vuelo }}</td>
                                    <td>{{ $item->hater_vuelo }}</td>
                                    <td>{{ $item->aero_ater_vuelo }}</td>
                                    <td>{{ $item->fecha_vuelo }}</td>
                                    <td>{{ $item->pocup_vuelo }}</td>
                                    <td>{{ $item->pvac_vuelo }}</td>
                                    <td>{{ $item->escala_vuelo }}</td>
                                    <td>{{ $item->fk_avion_id_avi }}</td>
                                    <td>
                                        <a href="{{ url('/vuelo/' . $item->id) }}" title="View vuelo"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/vuelo/' . $item->id . '/edit') }}" title="Edit vuelo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/vuelo' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete vuelo" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $vuelo->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection