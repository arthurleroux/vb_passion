@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            @include('errors.message')
        </div>
        @foreach($cars as $car)
            <div>
                <div>
                    <b>{{ $car->marque . ' ' . $car->modele }}</b>
                </div>
                <ul>
                    <li>{{ $car->annee }}</li>
                    <li>{{ $car->puissance }}</li>
                    <li>{{ $car->carburant }}</li>
                    <li>{{ $car->prix }} €</li>
                </ul>
                {!! Form::open(array(
                'route' => 'renting.store',
                'method' => 'POST'
                )) !!}

                {!! Form::hidden('car_id', $car->id, [
                    'class' => 'form-control'
                    ])
                !!}

                {!! Form::hidden('owner_id', $car->user_id, [
                    'class' => 'form-control'
                    ])
                !!}

                {!! Form::submit('Louer la voiture',
                    ['class' => 'btn btn-link'])
                !!}

                {!! Form::close() !!}
            </div>
        @endforeach
    </div>
@endsection