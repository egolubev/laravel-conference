@extends('layouts.main')

@section('content')
    <div class="text-center">
        <h1>
            Главная страница
        </h1>
        @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
    </div>
@endsection
