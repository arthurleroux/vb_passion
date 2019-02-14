@extends('layouts.app')

@section('content')
    <div class="container text-center">
        @include('errors.message')
    </div>
    @if(Auth::check() && Auth::id() == $profile->id)
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h4>Modifier profil</h4>

                    {!! Form::model($profile,
                    array(
                    'route' => array('update_password', $profile->id),
                    'method' => 'PUT'
                    )) !!}

                    <div class="form-group">
                        {!! Form::label('password', 'Nouveau mot de passe') !!}
                        {!! Form::password('password', [
                            'class' => 'form-control',
                            'placeholder' => 'Nouveau mot de passe'
                            ])
                        !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'Confirmation nouveau mot de passe') !!}
                        {!! Form::password('password_confirmation', [
                            'class' => 'form-control',
                            'placeholder' => 'Nouveau mot de passe'
                            ])
                        !!}
                    </div>

                    <div class="text-center">
                        {!! Form::submit('Enregistrer',
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