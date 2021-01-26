@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">aeropuerto_avion {{ $aeropuerto_avion->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/aeropuerto_avion') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/aeropuerto_avion/' . $aeropuerto_avion->id . '/edit') }}" title="Edit aeropuerto_avion"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('aeropuerto_avion' . '/' . $aeropuerto_avion->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete aeropuerto_avion" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $aeropuerto_avion->id }}</td>
                                    </tr>
                                    <tr><th> Codigo Aeropuerto </th><td> {{ $aeropuerto_avion->codigo_aeropuerto }} </td></tr><tr><th> Numero Placa </th><td> {{ $aeropuerto_avion->numero_placa }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection