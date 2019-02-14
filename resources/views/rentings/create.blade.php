@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4>Louer la {{ $car->marque . ' ' . $car->modele . ' de ' . $car->user->name  }}</h4>

                {!! Form::open(array(
                'route' => 'renting.store',
                'method' => 'POST'
                )) !!}

                <div class="form-group">
                    {!! Form::hidden('car_id', $car->id, [
                        'class' => 'form-control'
                        ])
                    !!}
                </div>

                <div class="text-center">
                    {!! Form::submit('Louer',
                        ['class' => 'btn btn-primary'])
                    !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection