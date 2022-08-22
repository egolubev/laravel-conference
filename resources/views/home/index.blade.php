@extends('layouts.main')

@section('content')
    <div class="text-center">
        <h1>
            Главная страница
        </h1>
        @if (Session::has('user_registration_success'))
            <div class="alert alert-success">{{ Session::get('user_registration_success') }}</div>
        @endif
    </div>
@endsection
