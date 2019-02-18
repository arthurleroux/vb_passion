@extends('layouts.app')

@section('content')

    <div class="container text-center">
        @include('errors.message')
    </div>

    @if(count(Auth::user()->cars) > 0)
        <div class="container">
            @foreach(Auth::user()->cars as $car)
                <div class="row">
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
                            <li>{{ $car->description }}</li>
                        </ul>

                        <a href="{{ route('car.edit', $car->id) }}" class="btn btn-link">Modifier voiture</a>

                        {!! Form::model($car,array(
                                     'route' => array('car.destroy', $car->id),
                                     'method' => 'DELETE'))
                                     !!}
                        {!! Form::submit('Supprimer', ['class' => 'btn btn-link']) !!}

                        {!! Form::close() !!}

                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            Demandes de location
                        </div>
                        <br>
                        @foreach($car->rentings as $renting)
                            {{ ucfirst($renting->user->name) }} souhaite louer votre voiture du {{ $renting->date_debut }} au {{ $renting->date_fin }}
                            <br><br>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection