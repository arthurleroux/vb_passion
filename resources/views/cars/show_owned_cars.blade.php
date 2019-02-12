@extends('layouts.app')

@section('content')
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
                </div>
            @endforeach
        </div>
    @endif
@endsection