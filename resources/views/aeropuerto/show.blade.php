@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">aeropuerto {{ $aeropuerto->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/aeropuerto') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/aeropuerto/' . $aeropuerto->id . '/edit') }}" title="Edit aeropuerto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('aeropuerto' . '/' . $aeropuerto->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete aeropuerto" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $aeropuerto->id }}</td>
                                    </tr>
                                    <tr><th> Codigo Aeropuerto </th><td> {{ $aeropuerto->codigo_aeropuerto }} </td></tr><tr><th> Nombre Aeropuerto </th><td> {{ $aeropuerto->nombre_aeropuerto }} </td></tr><tr><th> Ciudad Aeropuerto </th><td> {{ $aeropuerto->ciudad_aeropuerto }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
