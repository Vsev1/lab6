@extends('layout')

@section('content')
    <section class="hero-section">
        <div class="overlay-hero"></div>
        <div class="container">
            <div class="row">
                <div class="info-wrap col-6">
                    <h1>Comfort</h1>
                    <p>Мережа магазинів меблів в Україні. Зручні меблі для дому та офісу,
                        що відповідають найвищим стандартам якості.</p>
                    <a href="{{url('/catalogue')}}" class="btn">Переглянути меблі</a>
                </div>
                <div class="hero-slider-wrap col-6">
                    <img src="{{asset('images/slider1.jpg')}}" alt="">
                    <img src="{{asset('images/slider2.jpg')}}" alt="">
                    <img src="{{asset('images/slider3.jpg')}}" alt="">
                    <img src="{{asset('images/slider4.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="whywe-wrap">
        <div class="container">
            <div class="row">
                <div class="info-wrap col-6">
                    <h2>
                        Чому саме ми?
                    </h2>
                    <p>Comfort - це один із провідних українських інтернет-магазинів меблів,
                        який зарекомендував себе як сучасний торговий портал з широким
                        асортиментом меблів.</p>

                    <p>В нашій компанії працюють досвідчені експерти. Команда професіоналів
                        Comfort здатна ідеально підібрати меблі під ваш інтер’єр.
                        Протягом 13 років компанія успішно співпрацює з архітекторами,
                        дизайнерами і декораторами.Наше завдання – допомогти Вам створити
                        простір Вашої мрії. Облаштувати місце, в яке Вам завжди захочеться
                        повертатися. В якому Вам буде красиво, зручно і просто добре.</p>
                </div>
                <div class="img-wrap col-6">
                    <img src="{{asset('images/why-we.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="catalogue-section">
        <div class="container">
            <h2>Каталог</h2>
            <div class="catalogue-slider row">
                <div class="item-wrap col-sm">
                    <img src="{{asset('images/catalogue-section1.png')}}" alt="">
                    <h3>Шафа купе з двома дверима 2000 ДСП модель 4</h3>
                    <span class="price">8 529,00 грн</span>
                    <a href="#" class="btn">Купити</a>
                </div>
                <div class="item-wrap col-sm">
                    <img src="{{asset('images/catalogue-section2.png')}}" alt="">
                    <h3>Стіл журнальний Plato mini lux gg</h3>
                    <span class="price">5 533,00 грн</span>
                    <a href="#" class="btn">Купити</a>
                </div>
                <div class="item-wrap col-sm">
                    <img src="{{asset('images/catalogue-section3.png')}}" alt="">
                    <h3>Ліжко двоспальне “Женева”</h3>
                    <span class="price">20 668,00 грн</span>
                    <a href="#" class="btn">Купити</a>
                </div>
                <div class="item-wrap col-sm">
                    <img src="{{asset('images/catalogue-section4.png')}}" alt="">
                    <h3>Диван прямий Баррі</h3>
                    <span class="price">17 510,00 грн</span>
                    <a href="#" class="btn">Купити</a>
                </div>
                <div class="item-wrap col-sm">
                    <img src="{{asset('images/catalogue-section5.png')}}" alt="">
                    <h3>Дитяче ліжко "Гербер"</h3>
                    <span class="price"> 20000 грн</span>
                    <a href="#" class="btn">Купити</a>
                </div>
                <div class="item-wrap col-sm">
                    <img src="{{asset('images/catalogue-section6.png')}}" alt="">
                    <h3>Кухоний куток "Пирамида" модель 9</h3>
                    <span class="price">20000 грн</span>
                    <a href="#" class="btn">Купити</a>
                </div>
            </div>
        </div>
    </section>
    <section class="contacts">
        <div class="container">
            <h2>Контакти</h2>
            <div class="row">

                <div class="col-3">

                    <div class="phone-list row-1">
                        <h3>Телефони:</h3>
                        <ul>
                            <li><a href="#">+380 44 560 77 24</a></li>
                            <li><a href="#">+380 63 488 99 05</a></li>
                            <li><a href="#">+380 98 875 35 25</a></li>
                        </ul>
                    </div>

                    <div class="mail row-2">
                        <h3>Пошта:</h3>
                        <a href="#">comfortua@gmail.com</a>
                    </div>

                </div>

                <div class="col-6">

                    <div class="map row-1">
                        <div class="img-wrap">
                            <img src="{{asset('images/map.png')}}" alt="">
                        </div>
                    </div>

                    <div class="medias row-2">
                        <h3>Соціальні мережи:</h3>
                        <ul>
                            <li>
                                <div class="logo">
                                    <a href="#"><img src="{{asset('images/telegram.svg')}}" alt=""></a>
                                </div>
                            </li>
                            <li>
                                <div class="logo">
                                    <a href="#"><img src="{{asset('images/instagram.svg')}}" alt=""></a>
                                </div>
                            </li>
                            <li>
                                <div class="logo">
                                    <a href="#"><img src="{{asset('images/twitter.svg')}}" alt=""></a>
                                </div>
                            </li>
                            <li>
                                <div class="logo">
                                    <a href="#"><img src="{{asset('images/facebook.svg')}}" alt=""></a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="col-3">
                    <div class="adress row-1">
                        <h3>Наші магазини:</h3>
                        <ul>
                            <li>
                                <a href="#">Київ м(м. Шулявська) бул. Вацлава Гамена, 2</a>
                            </li>
                            <li>
                                <a href="#">Харків вул. 23-ого Серпня, 29</a>
                            </li>
                        </ul>
                    </div>


                    <div class="work-time row-2">
                        <h3>Графік роботи:</h3>
                        <ul>
                            <li>Пн-Пт: 9:00-20:00</li>
                            <li>Сб-Нд: 9:00-19:00</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
