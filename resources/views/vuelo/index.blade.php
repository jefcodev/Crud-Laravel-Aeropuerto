@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Vuelo</div>
                    <div class="card-body">
                        <a href="{{ url('/vuelo/create') }}" class="btn btn-success btn-sm" title="Add New vuelo">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/vuelo') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Codigo Vuelo</th><th>Plazas Vacias</th><th>Plazas Ocupadas</th>
                                        <th>Vuelo Directo</th>
                                        <th>Vuelo Escale</th>
                                        <th>Fecha de Vuelo</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($vuelo as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->codigo_vuelo }}</td><td>{{ $item->plazas_vacias }}</td><td>{{ $item->plazas_ocupadas }}</td>
                                        <td>{{ $item->vuelo_directo }}</td>
                                        <td>{{ $item->vuelo_escala }}</td>
                                        <td>{{ $item->fecha_vuelo }}</td>
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
