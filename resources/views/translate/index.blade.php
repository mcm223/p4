@extends('layouts.master')

@section('title')
    {{ env('APP_NAME') }}
@endsection

@section('content')
    <h2>{{ env('APP_NAME') }}: Translation Service</h2>
    <div id='intro'>
        <p>Use the form below to translate text into the language of your choosing. You can either specify a
            starting language, or let the system auto-detect what language you enter. Supported language combinations
            are English to any other language, or any language into English. You can also check out other
            translations that have been entered on the <a href='/translations'>translations page</a>.</p>
    </div>
    @include('modules.form')
@endsection



