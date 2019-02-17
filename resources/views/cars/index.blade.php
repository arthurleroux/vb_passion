@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            @include('errors.message')
        </div>
        <div class="row">
            @foreach($cars as $car)
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
                    @if(Auth::user()->id != $car->user_id)
                        <a href="{{ route('renting.create', ['id_car' => $car->id]) }}">Louer</a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection