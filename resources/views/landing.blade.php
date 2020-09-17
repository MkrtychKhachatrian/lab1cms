@extends('layouts.app')

@section('title')Про нас@endsection

@section('content')
    <div class="block1">
        <div class="but1">{{ $page->name }}</div>
        <img class="back1" src="{{asset('img/back1.png')}}">
    </div>
    <div class="block2">
        <h1 class="h_l">Cучасна діагностична клініка</h1>
        <div class="content1">
            <div class="content1_l">
                <img class="micro" src="{{asset('img/microscope.jpg')}}">
            </div>
            <div class="content1_r">
                <div class="content1_r1">
                    {{ $page->text }}
                    {{ $page->datacr }}
                    {{ $page->dataup }}
                </div>
                <div class="content1_r2">
                    <div class="stamp_label">
                        <div class="stamp"><img class="stamp_pic" src="{{asset('img/stamp.png')}}"></div>
                        <div class="stamp_text">Сучасне обладнання</div>
                    </div>
                    <div class="stamp_label">
                        <div class="stamp"><img class="stamp_pic" src="{{asset('img/stamp.png')}}"></div>
                        <div class="stamp_text">Кваліфіковані лікарі</div>
                    </div>
                    <div class="stamp_label">
                        <div class="stamp"><img class="stamp_pic" src="{{asset('img/stamp.png')}}"></div>
                        <div class="stamp_text">Доступні ціни</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block3">
        <h1 class="h_l">Чому саме ми?</h1>
        <div class=content2>
            <div class="mark">
                <div class="mark_p"><img src="{{asset('img/mark1.png')}}"></div>
                <a class="mark_text">Кожен пацієнт - улюблений</a>
            </div>

            <div class="mark">
                <div class="mark_p"><img src="{{asset('img/mark2.png')}}"></div>
                <a class="mark_text">Наша гарантія - це наші спеціалісти</a>
            </div>

            <div class="mark">
                <div class="mark_p"><img src="{{asset('img/mark3.png')}}"></div>
                <a class="mark_text">Найкращі ціни в Києві</a>
            </div>

            <div class="mark">
                <div class="mark_p"><img src="{{asset('img/mark4.png')}}"></div>
                <a class="mark_text">Ніякого болю</a>
            </div>

            <div class="mark">
                <div class="mark_p"><img src="{{asset('img/mark5.png')}}"></div>
                <a class="mark_text">Молодість - великий плюс</a>
            </div>

            <div class="mark">
                <div class="mark_p"><img src="{{asset('img/mark6.png')}}"></div>
                <a class="mark_text">Максимально комфортні умови</a>
            </div>
        </div>
    </div>
@endsection
