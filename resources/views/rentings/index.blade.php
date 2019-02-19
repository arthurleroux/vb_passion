@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            @include('errors.message')
        </div>
        @if(count(Auth::user()->rentings->where('statut', 'en_attente')) > 0)
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <b>Demandes de location en attente</b>
                    </div>
                    <br>
                    @foreach(Auth::user()->rentings->where('statut', 'en_attente') as $renting)
                        Vous avez demandé à {{ ucfirst($renting->car->user->name) }} de louer sa {{ $renting->car->marque }} {{ $renting->car->modele }} du {{ $renting->date_debut }} au {{ $renting->date_fin }}
                        <br><br>
                    @endforeach
                </div>
            </div>
        @endif
        @if(count(Auth::user()->rentings->where('statut', 'acceptee')) > 0)
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <b>Demandes de location acceptées</b>
                    </div>
                    <br>
                    @foreach(Auth::user()->rentings->where('statut', 'acceptee') as $renting)
                        {{ ucfirst($renting->car->user->name) }} a accepté de vous louer sa {{ $renting->car->marque }} {{ $renting->car->modele }} du {{ $renting->date_debut }} au {{ $renting->date_fin }}
                        <br><br>
                    @endforeach
                </div>
            </div>
        @endif
        @if(count(Auth::user()->rentings->where('statut', 'refusee')) > 0)
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <b>Demandes de location refusées</b>
                    </div>
                    <br>
                    @foreach(Auth::user()->rentings->where('statut', 'refusee') as $renting)
                        {{ ucfirst($renting->car->user->name) }} a refusé de vous louer sa {{ $renting->car->marque }} {{ $renting->car->modele }} du {{ $renting->date_debut }} au {{ $renting->date_fin }}
                        <br><br>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection