@extends('layout')

@section('content')
    <section class="registr-page">
        <div class="container">
            <h2 class="col-12 text-center">Увійти</h2>

            <form class="form-signin text-center" method="POST" action="{{ route('login') }}">
                @csrf

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Емейл" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert" style="margin-bottom: 10px">
                        <strong>{{'Неправильний емейл або пароль'}}</strong>
                    </span>
                @enderror

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Пароль" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert" style="margin-bottom: 10px">
                        <strong>{{ 'Неправильний емейл або пароль' }}</strong>
                    </span>
                @enderror

                <button type="submit" class="registr-btn log-btn">
                    {{ __('Увійти') }}
                </button>

                <a href="{{url('/register')}}" class="registr-btn">Зареєструватися</a>
            </form>
        </div>
    </section>
@endsection
