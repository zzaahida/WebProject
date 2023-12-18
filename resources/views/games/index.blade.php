@extends('layouts.app')
{{--<link rel="stylesheet" href="app.css">--}}

@section('title','Game Page')

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
                    <b style="font-size: 50px; color: #0b0b0b; text-align: center">Почему нужно учить французский ?</b><br>
                    <div class="row g-4">
                        <div class="text2">
                            <img src="{{asset("app/img/7.jpeg")}}" width="300px" height="200px" align="left">
                            <a>
                                <strong style="color: #0b0b0b; ">Язык мировой дипломатии и международных отношений</strong><br>
                                Французский язык является одним из официальных языков международных организаций, таких
                                как ООН и Европейский союз. Знание французского может открыть двери к карьере в мировой
                                дипломатии и политике.</a>
                        </div><br>
                    </div>
                    <br>
                    <div class="row g-4">
                        <div class="text2">
                            <img src="{{asset("app/img/8.jpeg")}}" width="300px" height="200px" align="right">
                            <a style="max-width: 350px; align: left">
                                <strong style="color: #0b0b0b; ">Образование и искусство</strong><br>
                                Французский язык является ключом к мировой литературе, философии и искусству. Множество
                                классических произведений написаны на французском, и образовательные ресурсы на этом
                                языке предоставляют доступ к важным культурным и образовательным материалам.</a>
                        </div><br>
                    </div>
                    <br>
                    <div class="row g-4">
                        <div class="text2">
                            <img src="{{asset("app/img/9.jpg")}}" width="300px" height="200px" align="left">
                            <a style="max-width: 350px; align: right">
                                <strong style="color: #0b0b0b; ">Бизнес и туризм</strong><br>
                                Французский — один из наиболее распространенных языков в мировом бизнесе. Знание языка
                                может быть полезным при ведении международных деловых отношений. Также французский часто
                                используется в туризме, и знание языка может улучшить опыт путешествий по франкоязычным
                                странам.</a>
                        </div><br>
                    </div>
                </div><br>
                <div class="container mt-2" >
                    <div class="col-md-2" style="align-content: center;"><hr>
                        <div class="card d-inline-flex w-1000 shadow-sm #8DC7D1">
                            <div class="card-header bg-white">
                                <a href="https://youtube.com/playlist?list=PLjvgiPeOAxvc_T67uIKNBOv-rzS1i0N-3&si=Uxq1dZXlLi9QKa9G" class="list-group-item list-group-item-action list-group-item-primary" style="align-content:center; width: 800px; font-size: 50px; height: 120px; padding: 20px; ">
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
                                            <b style="color: #0b0b0b;">Какой из следующих вариантов является правильным переводом фразы "Bonjour"?</b>
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="btn btn-outline-primary btn-lg" type="button" style="width: 200px">
                                                    <a href="https://testizer.ru/testy/elementaire-a1">
                                                        a) Как дела?</a>
                                                </button>
                                            </div><br>
                                            <div class="col-md-6">
                                                <button class="btn btn-outline-primary btn-lg" type="button" style="width: 200px">
                                                    <a href="https://testizer.ru/testy/elementaire-a1">
                                                        b) Привет!</a>
                                                </button>
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn btn-outline-primary btn-lg" type="button" style="width: 200px">
                                                    <a href="https://testizer.ru/testy/elementaire-a1">
                                                        c) Доброе утро</a>
                                                </button>
                                            </div><br>
                                            <div class="col-md-6">
                                                <button class="btn btn-outline-primary btn-lg" type="button" style="width: 200px">
                                                    <a href="https://testizer.ru/testy/elementaire-a1">
                                                        d) Пожалуйста</a>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button class="btn btn-outline-primary btn-lg" type="button" style="width: 250px; font-weight: bold" >
                                                <a href="https://testizer.ru/testy/elementaire-a1">
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
