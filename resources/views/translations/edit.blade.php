@extends('layouts.master')

@section('title')
    {{ env('APP_NAME') }}
@endsection

@section('content')
    <h2>Editing Translation #{{ $entry['id'] }}</h2>

    @include('modules.edit_form')

@endsection