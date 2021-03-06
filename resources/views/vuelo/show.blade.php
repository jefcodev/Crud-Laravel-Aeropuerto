@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">vuelo {{ $vuelo->id }}</div>
                <div class="card-body">

                    <a href="{{ url('/vuelo') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <a href="{{ url('/vuelo/' . $vuelo->id . '/edit') }}" title="Edit vuelo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                    <form method="POST" action="{{ url('vuelo' . '/' . $vuelo->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete vuelo" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                    <br />
                    <br />

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $vuelo->id }}</td>
                                </tr>
                                <tr>
                                    <th> Codigo Vuelo </th>
                                    <td> {{ $vuelo->codigo_vuelo }} </td>
                                </tr>
                                <tr>
                                    <th> Plazas Vacias </th>
                                    <td> {{ $vuelo->hdesp_vuelo }} </td>
                                </tr>
                                <tr>
                                    <th> Plazas Ocupadas </th>
                                    <td> {{ $vuelo->hater_vuelo }} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection