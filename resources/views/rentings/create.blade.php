@extends('layouts.app')

@section('content')
    {{ app('request')->input('id_car') }}
@endsection