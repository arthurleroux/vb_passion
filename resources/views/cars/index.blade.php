@extends('layouts.app')

@section('content')
    <div class="container">
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
            </div>
        @endforeach
    </div>
@endsection