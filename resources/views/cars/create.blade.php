@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4>Ajouter une voiture</h4>

                {!! Form::open(array(
                'files' => 'true',
                'route' => 'car.store',
                'method' => 'POST'
                )) !!}

                <div class="form-group">
                    {!! Form::label('marque', 'Marque') !!}
                    {!! Form::text('marque', '', [
                        'class' => 'form-control',
                        'placeholder' => 'Marque'
                        ])
                    !!}
                </div>

                <div class="form-group">
                    {!! Form::label('modele', 'Modèle') !!}
                    {!! Form::text('modele', '', [
                        'class' => 'form-control',
                        'placeholder' => 'Modèle'
                        ])
                    !!}
                </div>

                <div class="form-group">
                    {!! Form::label('annee', 'Année') !!}
                    {!! Form::text('annee', '', [
                        'class' => 'form-control',
                        'placeholder' => 'Année'
                        ])
                    !!}
                </div>

                <div class="form-group">
                    {!! Form::label('puissance', 'Puissance') !!}
                    {!! Form::text('puissance', '', [
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
                    {!! Form::text('prix', '', [
                        'class' => 'form-control',
                        'placeholder' => 'Prix par jour'
                        ])
                    !!}
                </div>

                <div class="form-group">
                    {!! Form::label('image', 'Image') !!}
                    <br>
                    {!! Form::file('image')
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
@endsection