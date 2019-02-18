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
                    {!! Form::label('date_debut', 'Date du début de la location') !!}
                    {!! Form::date('date_debut', '', [
                        'class' => 'form-control'
                        ])
                    !!}
                </div>

                <div class="form-group">
                    {!! Form::label('date_fin', 'Date de la fin de la location') !!}
                    {!! Form::date('date_fin', '', [
                        'class' => 'form-control'
                        ])
                    !!}
                </div>

                <div class="form-group">
                    {!! Form::hidden('car_id', $car->id, [
                        'class' => 'form-control'
                        ])
                    !!}
                </div>

                <div class="text-center">
                    {!! Form::submit('Faire une demande de location',
                        ['class' => 'btn btn-primary'])
                    !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection