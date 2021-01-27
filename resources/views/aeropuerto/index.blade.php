@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Aeropuerto</div>
                <div class="card-body">
                    <a href="{{ url('/aeropuerto/create') }}" class="btn btn-success btn-sm" title="Add New aeropuerto">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>


                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Codigo </th>
                                    <th>Nombre </th>
                                    <th>Ciudad </th>
                                    <th>Pais </th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($aeropuerto as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->codigo_aero }}</td>
                                    <td>{{ $item->nombre_aero }}</td>
                                    <td>{{ $item->ciudad_aero }}</td>
                                    <td>{{ $item->pais_aero }}</td>
                                    <td>
                                        <a href="{{ url('/aeropuerto/' . $item->id) }}" title="View aeropuerto"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                        <a href="{{ url('/aeropuerto/' . $item->id . '/edit') }}" title="Edit aeropuerto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/aeropuerto' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete aeropuerto" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $aeropuerto->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection