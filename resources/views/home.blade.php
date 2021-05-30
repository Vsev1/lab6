@extends('layout')

@section('content')
<section class="registr-page text-center" style="height: 700px">
    <div class="container">
        <h2 style="margin-left: 20px">Вітаємо, {{(Auth::user()->name) }}</h2>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>

        <a href="{{ route('logout') }}" class="registr-btn log-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Вийти
        </a>
        <a href="{{url('/')}}" style="margin-left: 10px" class="registr-btn log-btn">Головна сторінка</a>


        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

    </div>
</section>
@endsection
