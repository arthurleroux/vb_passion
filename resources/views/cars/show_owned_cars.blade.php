@extends('layouts.app')

@section('content')

    <div class="container text-center">
        @include('errors.message')
    </div>

    @if(count(Auth::user()->cars) > 0)
        <div class="container">
            @foreach(Auth::user()->cars as $car)
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
                    {!! Form::model($car,array(
                                 'route' => array('car.destroy', $car->id),
                                 'method' => 'DELETE'))
                                 !!}
                    {!! Form::submit('Supprimer', ['class' => 'btn btn-link']) !!}

                    {!! Form::close() !!}

                </div>
            @endforeach
        </div>
    @endif
@endsection