@extends('layouts.app')

@section('content')
    <div class="container text-center">
        @include('errors.message')
    </div>
    @if(Auth::check() && Auth::user()->id == $profile->id)
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h4>Modifier profil</h4>

                    {!! Form::model($profile,
                    array(
                    'route' => array('profile.update', $profile->id),
                    'method' => 'PUT'
                    )) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Nom') !!}
                        {!! Form::text('name', old('name'), [
                            'class' => 'form-control',
                            'placeholder' => 'Nom'
                            ])
                        !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::text('email', old('email'), [
                            'class' => 'form-control',
                            'placeholder' => 'Email'
                            ])
                        !!}
                    </div>

                    <div class="text-center">
                        {!! Form::submit('Enregistrer modifications',
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