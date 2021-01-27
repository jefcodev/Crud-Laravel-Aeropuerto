@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
  

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Aerolinea</div>
                <div class="card-body">
                    <a href="{{ url('/aerolinea/create') }}" class="btn btn-success btn-sm" title="Add New aerolinea">
                        <i class="fa fa-plus" aria-hidden="true"></i> Crear Nuevo
                    </a>

                    

                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Codigo Aerolinea</th>
                                    <th>Nombre Aerolinea</th>
                                    <th>Pais Aerolinea</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($aerolinea as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->codigo_alinea }}</td>
                                    <td>{{ $item->nombre_alinea }}</td>
                                    <td>{{ $item->pais_alinea }}</td>
                                    <td>
                                        <a href="{{ url('/aerolinea/' . $item->id) }}" title="View aerolinea"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                        <a href="{{ url('/aerolinea/' . $item->id . '/edit') }}" title="Edit aerolinea"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                        <form method="POST" action="{{ url('/aerolinea' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete aerolinea" onclick="return confirm(&quot; Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $aerolinea->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection