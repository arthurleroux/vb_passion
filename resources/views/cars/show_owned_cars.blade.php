@extends('layouts.app')

@section('content')

    <div class="container text-center">
        @include('errors.message')
    </div>

    @if(count(Auth::user()->cars) > 0)
        <div class="container">
            <div class="row">
                @foreach(Auth::user()->cars as $car)
                    <div class="col-md-6 car">
                        <div class="slider">
                            @foreach($car->images as $image)
                                <div class="img-container">
                                    <img class="img-car" src="{{ asset('img/cars/car_'.$car->id.'/'.$image->name) }}">
                                </div>
                            @endforeach
                        </div>
                        <div>
                            <b>{{ $car->marque . ' ' . $car->modele }}</b>
                        </div>
                        <ul>
                            <li>{{ $car->annee }}</li>
                            <li>{{ $car->puissance }}</li>
                            <li>{{ $car->carburant }}</li>
                            <li>{{ $car->prix }} €</li>
                        </ul>
                        <a href="{{ route('car.edit', $car->id) }}" class="btn btn-link">Modifier voiture</a>

                        {!! Form::model($car,array(
                                     'route' => array('car.destroy', $car->id),
                                     'method' => 'DELETE'))
                                     !!}
                        {!! Form::submit('Supprimer', ['class' => 'btn btn-link']) !!}

                        {!! Form::close() !!}

                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection