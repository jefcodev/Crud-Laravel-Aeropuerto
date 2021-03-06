@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Avion</div>
                <div class="card-body">
                    <a href="{{ url('/avion/create') }}" class="btn btn-success btn-sm" title="Add New avion">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>

                    

                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Numero Placa</th>
                                    <th>Capacidad</th>
                                    <th>Aerolinea</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($avion as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->placa_avi }}</td>
                                    <td>{{ $item->capacidad_avi }}</td>
                                    <td>{{ $item->fk_aerolinea_id_alinea }}</td>
                                    <td>
                                        <a href="{{ url('/avion/' . $item->id) }}" title="View avion"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/avion/' . $item->id . '/edit') }}" title="Edit avion"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/avion' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete avion" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $avion->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection