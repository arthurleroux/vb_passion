@extends('layouts.app')

@section('content')
    <div class="container text-center">
        @include('errors.message')
    </div>
    @if(Auth::check()
        && (Auth::user()->id == $car->user_id)
    )
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4>Modifier voiture</h4>

                {!! Form::model($car,
                array(
                'route' => array('car.update', $car->id),
                'method' => 'PUT'
                )) !!}

                <div class="form-group">
                    {!! Form::label('marque', 'Marque') !!}
                    {!! Form::text('marque', old('marque'), [
                        'class' => 'form-control',
                        'placeholder' => 'Marque'
                        ])
                    !!}
                </div>

                <div class="form-group">
                    {!! Form::label('modele', 'Modèle') !!}
                    {!! Form::text('modele', old('modele'), [
                        'class' => 'form-control',
                        'placeholder' => 'Modèle'
                        ])
                    !!}
                </div>

                <div class="form-group">
                    {!! Form::label('annee', 'Année') !!}
                    {!! Form::text('annee', old('annee'), [
                        'class' => 'form-control',
                        'placeholder' => 'Année'
                        ])
                    !!}
                </div>

                <div class="form-group">
                    {!! Form::label('puissance', 'Puissance') !!}
                    {!! Form::text('puissance', old('puissance'), [
                        'class' => 'form-control',
                        'placeholder' => 'Puissance'
                        ])
                    !!}
                </div>

                <div class="form-group">
                    {!! Form::label('carburant', 'Carburant') !!}
                    <br>
                    {!! Form::radio('carburant', 'essence', [
                        'class' => 'form-control',
                        'placeholder' => 'Essence'
                        ])
                    !!}
                    {!! Form::label('carburant', 'Essence') !!}
                    <br>
                    {!! Form::radio('carburant', 'diesel', [
                        'class' => 'form-control',
                        'placeholder' => 'Diesel'
                        ])
                    !!}
                    {!! Form::label('carburant', 'Diesel') !!}
                </div>

                <div class="form-group">
                    {!! Form::label('prix', 'Prix par jour') !!}
                    {!! Form::text('prix', old('prix'), [
                        'class' => 'form-control',
                        'placeholder' => 'Prix par jour'
                        ])
                    !!}
                </div>

                <div class="text-center">
                    {!! Form::submit('Enregistrer la voiture',
                        ['class' => 'btn btn-primary'])
                    !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

    @else
        <div class="container">
            <div class="alert-danger alert">
                <div class="text-center">
                    <p>Vous n'avez pas les droits nécessaires</p>
                </div>
            </div>
        </div>
    @endif
@endsection