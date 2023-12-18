@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href={{asset("app/css/style.css")}}>
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <!-- single_carouse -->
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text "><h3></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ single_carouse -->
            <!-- single_carouse -->
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text "><h3></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ single_carouse -->
            <!-- single_carouse -->
            <div class="single_slider  d-flex align-items-center slider_bg_3">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ single_carouse -->
            <!-- single_carouse -->
            <div class="single_slider  d-flex align-items-center slider_bg_4">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ single_carouse -->
        </div>
    </div><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="container" style="max-width: 1400px;">
                    <b style="font-size: 50px; color: #0b0b0b; text-align: center">Почему нужно учить английский?</b><br>
                    <div class="row g-4">
                        <div class="text2">
                            <img src="{{asset("app/img/1.jpg")}}" width="300px" height="200px" align="left">
                            <a>
                                <strong style="color: #0b0b0b; ">Мировой язык коммуникации</strong><br>
                                Английский язык стал мировым стандартом для международного общения. Будучи официальным
                                или вторым языком во многих странах, он обеспечивает уникальную возможность общения с
                                людьми из разных культур и областей мира. Знание английского упрощает поиск общего языка
                                в деловых, культурных и научных обменах.</a>
                        </div><br>
                    </div>
                    <br>
                    <div class="row g-4">
                        <div class="text2">
                            <img src="{{asset("app/img/2.jpeg")}}" width="300px" height="200px" align="right">
                            <a style="max-width: 350px; align: left">
                                <strong style="color: #0b0b0b; ">Широкие перспективы в карьере</strong><br>
                                Английский язык считается ключевым навыком в мировой экономике. Многие международные
                                компании и организации используют английский как официальный язык для внутреннего общения.
                                Знание английского открывает двери к возможностям работы на глобальном уровне, повышая
                                конкурентоспособность на рынке труда.</a>
                        </div><br>
                    </div>
                    <br>
                    <div class="row g-4">
                        <div class="text2">
                            <img src="{{asset("app/img/3.jpeg")}}" width="300px" height="200px" align="left">
                            <a style="max-width: 350px; align: right">
                                <strong style="color: #0b0b0b; ">Доступ к мировому образованию и информации</strong><br>
                                Большинство научных статей, учебных материалов и образовательных ресурсов в мире
                                представлены на английском языке. Знание английского существенно облегчает процесс
                                обучения и исследования, позволяя получить доступ к передовым знаниям и технологиям.
                                Это особенно важно в академической и научной сфере.</a>
                        </div><br>
                    </div>
                </div><br>
                <div class="container mt-2" >
                    <div class="col-md-2" style="align-content: center;"><hr>
                        <div class="card d-inline-flex w-1000 shadow-sm #8DC7D1">
                            <div class="card-header bg-white">
                                <a href="https://youtube.com/playlist?list=PLD6SPjEPomaustGSgYNsn3V62BTQeH85X&si=g72oCetYNFEgqFXv" class="list-group-item list-group-item-action list-group-item-primary" style="align-content:center; width: 800px; font-size: 50px; height: 120px; padding: 20px; ">
                                    <img src="{{asset("app/img/youtube.png")}}" width="120px" height="80px">
                                    <b style="color: #0b0b0b;">Видеоуроки            -></b></a>
                            </div>
                        </div>
                    </div>
                </div><br>
            </div>
        </div>
    </div>
    <div class="container mt-6" style="text-align: center;">
        <div class="row g-4">
            <div class="p-3 text-primary-emphasis bg-primary-subtle">
                <div class="list-group-item list-group-item-action list-group-item" style="max-width: 1200px;">
                    <div class="card-body" >
                        <hr>
                        <a style="text-align: left; font-size: 22px">
                            <strong>Закрепим освоенный материал!</strong><br>
                        </a>
                        <div class="container mt-2">
                            <div class="card w-1000  shadow-sm #8DC7D1">
                                <div class="card-header bg-white text-center">
                                    <p style="font-size: 20px; padding: 10px;text-align: center">
                                        <b style="color: #0b0b0b;">What is the correct past tense of the verb "to swim"?</b>
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn btn-outline-primary btn-lg" type="button" style="width: 200px">
                                                <a href="https://www.efset.org/ru/quick-check/take-test/">
                                                    a) Swimmed</a>
                                            </button>
                                        </div><br>
                                        <div class="col-md-6">
                                            <button class="btn btn-outline-primary btn-lg" type="button" style="width: 200px">
                                                <a href="https://www.efset.org/ru/quick-check/take-test/">
                                                    b) Swam</a>
                                            </button>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-outline-primary btn-lg" type="button" style="width: 200px">
                                                <a href="https://www.efset.org/ru/quick-check/take-test/">
                                                    c) Swum</a>
                                            </button>
                                        </div><br>
                                        <div class="col-md-6">
                                            <button class="btn btn-outline-primary btn-lg" type="button" style="width: 200px">
                                                <a href="https://www.efset.org/ru/quick-check/take-test/">
                                                    d) Swimming</a>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button class="btn btn-outline-primary btn-lg" type="button" style="width: 250px; font-weight: bold" >
                                            <a href="https://www.efset.org/ru/quick-check/take-test/">
                                                Больше вопросов -></a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
