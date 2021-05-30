@extends('layout')

@section('content')
    <section class="registr-page">
        <div class="container">
            <h2 class="col-12 text-center">Регістрація</h2>

            <form class="form-signin text-center" method="POST" action="{{ route('register') }}">
                @csrf
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Ім'я користувача" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert" style="margin-bottom: 10px">
                        <strong>{{"Це ім'я вже зайнято"}}</strong>
                    </span>
                @enderror

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Емейл" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert" style="margin-bottom: 10px">
                        <strong>{{"Цей емейл вже зайнятий"}}</strong>
                    </span>
                @enderror

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Пароль" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert" style="margin-bottom: 10px">
                        <strong>{{"Пароль не вказаний"}}</strong>
                    </span>
                @enderror

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Підтвердити пароль" required autocomplete="new-password">

                <button type="submit" class="registr-btn">
                    {{ __('Зареєструватися') }}
                </button>

                <a href="{{url('/login')}}" class="registr-btn log-btn">Увійти</a>
            </form>
        </div>
    </section>
@endsection
