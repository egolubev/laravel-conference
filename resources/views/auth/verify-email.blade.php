@extends('layouts.main')

@section('content')
    <div class="text-center">
        <div class="col-md-4 offset-4">
            @if (Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
        </div>
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
