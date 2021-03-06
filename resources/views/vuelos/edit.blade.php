@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vuelos CIACA</div>

                <div class="card-body">
                  {!! Form::model($vuelo, ['route' => ['vuelos.update', $vuelo->id],
                  'method' => 'PUT']) !!}

                    @include('vuelos.partials.form')

                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
