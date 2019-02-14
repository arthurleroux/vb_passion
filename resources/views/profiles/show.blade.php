@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            @include('errors.message')
            @if(Auth::check() && Auth::user()->id == $profile->id)
                <h4>Mes informations</h4>
                <ul>
                    <li>Nom : {{ $profile->name }}</li>
                    <li>Adresse email : {{ $profile->email }}</li>
                </ul>
                <a class="btn btn-link" href="{{ route('profile.edit', Auth::id()) }}">Modifier mon profil</a>
            @else
                <div class="alert-danger alert">
                    <div class="text-center">
                        <p>Ce n'est pas votre profil</p>
                        <a href="{{ route('profile.show', Auth::id()) }}">Aller à mon profil</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection