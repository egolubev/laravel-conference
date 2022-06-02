@extends('layouts.main')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="m-0">
                                {{__('Регистрация')}}
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('register.store') }}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="mb-3">
                                    <label class="required" for="name">
                                        {{__('Имя')}}
                                    </label>
                                    <input type="text" name="name" class="form-control" autofocus>
                                </div>
                                <div class="mb-3">
                                    <label class="required" for="email">
                                        {{__('Email')}}
                                    </label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="required" for="password">
                                        {{__('Пароль')}}
                                    </label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="required" for="password-confirm">
                                        {{__('Подтвердите пароль')}}
                                    </label>
                                    <input type="password" name="password-confirm" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    {{__('Войти')}}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
