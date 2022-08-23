@extends('layouts.main')

@section('content')
    <div class="text-center">
        @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <button type="submit" class="btn btn-primary">
                    {{__('Получить новую ссылку')}}
                </button>
            </div>
        </form>
    </div>
@endsection
