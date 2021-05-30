@extends('layout')
<title>Каталог</title>

@section('content')
    <section class="catalogue-page">
        <div class="container">
            <div class="info-wrap col-12 text-center">
                <h1>Каталог</h1>
            </div>
            <div class="catalogue-main-wrap d-flex">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="catalogue-sidebar col-4">
                    <ul>
                        <li><a href="#">Головна</a></li>
                        <li><a href="#">Шафи</a></li>
                        <li><a href="#">Кухні</a></li>
                        <li><a href="#">М'які меблі</a></li>
                        <li><a href="#">Вітальні</a></li>
                        <li><a href="#">Ліжка</a></li>
                        <li><a href="#">Дитячі меблі</a></li>
                        <li><a href="#">Кухоні куточки</a></li>
                        <li><a href="#">Столи обідні</a></li>
                        <li><a href="#">Журнальні столики</a></li>
                        <li><a href="#">Комп'ютерні столи</a></li>
                        <li><a href="#">Офісні меблі</a></li>
                        <li><a href="#">Комоди і тумби</a></li>
                        <li><a href="#">Ванні кімнати</a></li>
                        <li><a href="#">Спальні гарнітури</a></li>
                        <li><a href="#">Крісла і стільці</a></li>
                        <li><a href="#">Матраси</a></li>
                        <li><a href="#">Дзеркала</a></li>
                        <li><a href="#">Вішалки</a></li>
                        <li><a href="#">Двері</a></li>
                        <li><a href="#">NoReCa</a></li>
                        <li><a href="#">Розпродаж</a></li>
                        <li><a href="#">Акційні товари</a></li>
                    </ul>
                </div>
                <div class="catalogue-products col-8">
                    <div class="sorting">
                        <select name="sorting" id="sorting">
                            <option value="">за замовчуванням</option>
                            <option value="">від популярних</option>
                            <option value="">від дешевих</option>
                            <option value="">від дорогих</option>
                        </select>
                    </div>
                    <div class="products row">
                        @foreach($products as $product)
                            <div class="col-4">
                                <img src="{{asset($product->imageName)}}" alt="">
                                <h3>{{$product->name}}</h3>
                                <span class="price">{{$product->price}} грн.</span>
                                <a href="" class="btn">Купити</a>
                            </div>
                        @endforeach
                        <div class="pagination" style="margin-top: 20px">
                            {{$products->appends(['searchText' => request()->searchText])->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
