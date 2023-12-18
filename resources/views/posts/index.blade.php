@extends('layouts.app')
{{--<link rel="stylesheet" href="app.css">--}}

@section('title','Home Page')

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
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                   <div class="container" style="text-align: left;max-width: 1800px;">
                       <div class="row g-4">
                           <div class="text" style="align-content: center;">
                               <strong style="color: #0b0b0b; ">AZlang</strong>
                               <a>предоставляет удобную онлайн-платформу для изучения иностранных языков
                                   с использованием видео-уроков и тестов. Наши студенты могут выбирать из трех доступных
                                   языков: английского, французского и турецкого. Программа включает в себя интерактивные уроки,
                                   которые обеспечивают эффективное усвоение материала, а также тесты для проверки уровня знаний.
                                   Все это делает процесс обучения увлекательным, гибким и доступным для всех, кто стремится
                                   улучшить свои языковые навыки.</a>
                           </div>
                       </div>
                   </div>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    </li>
                    <div class="container mt-2" >
                        <div class="col-md-2" style="align-content: center;"><hr>
                            <div class="card d-inline-flex w-1000 shadow-sm #8DC7D1">
                                <div class="card-header bg-white">
                                    <a href="{{route('dictionary.index')}}" class="list-group-item list-group-item-action list-group-item-primary" style="align-content:center; width: 800px; font-size: 50px; height: 120px; padding: 20px; ">
                                        <img src="{{asset("app/img/english.jpg")}}" width="150px" height="80px">
                                        <b style="color: #0b0b0b;">{{ __('messages.Dictionary') }}</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="container mt-2" >
                       <div class="col-md-2" style="align-content: center;"><hr>
                           <div class="card d-inline-flex w-1000 shadow-sm #8DC7D1">
                               <div class="card-header bg-white">
                                   <a href="{{route('games.index')}}" class="list-group-item list-group-item-action list-group-item-primary" style="align-content:center; width: 800px; font-size: 50px; height: 120px; padding: 20px; ">
                                       <img src="{{asset("app/img/france.jpg")}}" width="150px" height="80px">
                                       <b style="color: #0b0b0b;">{{ __('messages.game') }}</b></a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="container mt-2" >
                       <div class="col-md-2" style="align-content: center;"><hr>
                           <div class="card d-inline-flex w-1000 shadow-sm #8DC7D1">
                               <div class="card-header bg-white">
                                   <a href="{{route('tests.create')}}" class="list-group-item list-group-item-action list-group-item-primary" style="align-content:center; width: 800px; font-size: 50px; height: 120px; padding: 20px; ">
                                       <img src="{{asset("app/img/turkish.jpg")}}" width="150px" height="80px">
                                       <b style="color: #0b0b0b;">{{ __('messages.test') }}</b></a>
                               </div>
                           </div>
                       </div>
                   </div><br>
                   </ul>
                   <br>
                   <div class="container" style="max-width: 1400px;">
                       <b style="font-size: 50px; color: #0b0b0b; text-align: center">Почему учить языки
                           в онлайн‑школе эффективно?</b><br>
                       <div class="row g-4">
                           <div class="text2">
                               <img src="{{asset("app/img/qwerty1.jpg")}}" width="300px" height="200px" align="left">
                               <a>
                                   <strong style="color: #0b0b0b; text-align: right">Индивидуальная программа обучения</strong><br>
                                   Занимайся иностранными языками онлайн в любом месте
                                   и в любое время. Для урока требуется только интернет.
                                   Мы подберем идеального преподавателя под твой характер и
                                   интересы, составим расписание и интенсивность занятий, а
                                   менеджер поддержки поможет сделать процесс обучения комфортным
                                   для эффективного изучения иностранных языков.</a>
                           </div><br>
                       </div>
                       <br>
                       <div class="row g-4">
                           <div class="text2">
                               <img src="{{asset("app/img/qwerty2.jpg")}}" width="300px" height="200px" align="right">
                               <a style="max-width: 350px; align: left">
                                   <strong style="color: #0b0b0b; text-align: left">Инновационный подход</strong><br>
                                   Онлайн‑платформа полностью решает проблему поиска
                                   и приобретения учебных материалов. Все необходимое
                                   для овладения языком уже есть на нашем сайте. Для
                                   закрепления новых знаний после онлайн‑уроков и разговорной
                                   практики можешь воспользоваться Разговорным Клубом или прокачать
                                   свой уровень в онлайн‑тренажере.</a>
                           </div><br>
                       </div>
                       <br>
                       <div class="row g-4">
                           <div class="text2">
                               <img src="{{asset("app/img/qwerty3.jpg")}}" width="300px" height="200px" align="left">
                               <a style="max-width: 350px; align: right">
                                   <strong style="color: #0b0b0b; text-align: right">Идеальная атмосфера</strong><br>
                                   Заниматься иностранным языком в онлайн‑школе — весело!
                                   Наши преподаватели — настоящие профессионалы своего дела.
                                   Интерактивные уроки не дадут тебе скучать. В отличие
                                   от групповых занятий, индивидуальные уроки онлайн помогают
                                   быстрее побороть страх и стыд общения на иностранном языке.</a>
                           </div><br>
                       </div>
                   </div><br>

            <div class="container mt-6" style="text-align: center;">
                <div class="row g-4">
                    <div class="p-3 text-primary-emphasis bg-primary-subtle">
                        <div class="list-group-item list-group-item-action list-group-item" style="max-width: 1200px;">
                            <div class="card-body" >
                                <img src="{{asset("app/img/qwerty4.png")}}" width="380px" height="400px" align="right">                                        <hr>
                                <a style="text-align: left; font-size: 22px">
                                    <strong>Наша миссия</strong><br>
                                    В AZlang мы придерживаемся убеждения, что образование завтрашнего дня должно
                                    быть доступным, удобным и результативным. Мы активно разрабатываем инновационные
                                    образовательные продукты, направленные на вдохновение наших студентов освоить
                                    иностранные языки, обеспечивая им возможность общаться с миром на новом уровне.</a>
                            </div>
                        </div>
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
                                           <strong>Узнай свой уровень языка!</strong><br>
                                           <div class="container mt-2">
                                               <div class="row g-4">
                                                   <div class="col-md-4">
                                                       <div class="card w-100 shadow-sm #8DC7D1">
                                                           <div class="card-header bg-white text-center" style="height: 120px; align-content: center">
                                                               <a href="https://www.englishdom.com/test-your-english-level/" class="list-group-item list-group-item-action list-group-item-primary d-block" style="width: 196px; font-size: 20px; padding: 10px;">
                                                                   <b style="color: #0b0b0b;">{{ __('messages.Dictionary') }}</b>
                                                               </a><br>
                                                               <b style="color: #0b0b0b;">Перейти к тесту</b>
                                                           </div>
                                                       </div>
                                                   </div>

                                                   <div class="col-md-4">
                                                       <div class="card w-100 shadow-sm #8DC7D1">
                                                           <div class="card-header bg-white text-center" style="height: 120px; align-content: center">
                                                               <a href="https://www.alpadia.com/ru/testy-onlajn/test-po-francuzskomu-jazyku" class="list-group-item list-group-item-action list-group-item-primary d-block" style="width: 196px; font-size: 20px; padding: 10px;">
                                                                   <b style="color: #0b0b0b;">{{ __('messages.game') }}</b>
                                                               </a><br>
                                                               <b style="color: #0b0b0b;">Перейти к тесту</b>
                                                           </div>
                                                       </div>
                                                   </div>

                                                   <div class="col-md-4">
                                                       <div class="card w-100 shadow-sm #8DC7D1">
                                                           <div class="card-header bg-white text-center" style="height: 120px; align-content: center">
                                                               <a href="https://languagelifeschool.com/quiz/test-na-znanie-turetskogo-yazyka/" class="list-group-item list-group-item-action list-group-item-primary d-block" style="width: 196px; font-size: 20px; padding: 10px;">
                                                                   <b style="color: #0b0b0b;">{{ __('messages.test') }}</b>
                                                               </a><br>
                                                               <b style="color: #0b0b0b;">Перейти к тесту</b>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           </a>
                                   </div>
                                   </div>

                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>



        </div>

    <div class="card">
        <div class="tools">
            <div class="circle">
                <span class="red box"></span>
            </div>
            <div class="circle">
                <span class="yellow box"></span>
            </div>
            <div class="circle">
                <span class="green box"></span>
            </div>
        </div>
        <div class="card__content">
        </div>
    </div>

@endsection

{{--@extends('layouts.app')
@section('title','Index Page')
@section('content')
    @foreach($categories as $cat)
        <a href="{{route('posts.category', $cat->id)}}">{{$cat->name}}</a>
    @endforeach<br><hr>
    <a href="{{ route('posts.create') }}">Go to create page</a>
    @foreach($posts as $post)
        <a href="{{route('posts.show',$post->id)}}"><h3>{{$post->title}}</h3></a>
        <p>{{$post->content}}</p>
        <form action="{{route('posts.destroy',$post->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-outline-danger" type="submit">Delete</button>

        </form>

    @endforeach

@endsection--}}

