@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">vuelo_aerolinea {{ $vuelo_aerolinea->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/vuelo_aerolinea') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/vuelo_aerolinea/' . $vuelo_aerolinea->id . '/edit') }}" title="Edit vuelo_aerolinea"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('vuelo_aerolinea' . '/' . $vuelo_aerolinea->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete vuelo_aerolinea" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $vuelo_aerolinea->id }}</td>
                                    </tr>
                                    <tr><th> Codigo Vuelo </th><td> {{ $vuelo_aerolinea->codigo_vuelo }} </td></tr><tr><th> Codigo Aerolinea </th><td> {{ $vuelo_aerolinea->codigo_aerolinea }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
