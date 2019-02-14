@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            @include('errors.message')
        </div>
        @foreach($rentings as $renting)
            <div>
                <div>
                    <b>{{ $renting->car->marque }}</b>
                </div>
                <ul>
                    <li>{{ $renting->car->user->name }}</li>
                    <li>{{ $renting->user->name }}</li>
                </ul>
            </div>
            
        @endforeach
    </div>
@endsection