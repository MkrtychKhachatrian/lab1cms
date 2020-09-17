<header>
    <div class="container">
        <a href="{{ route('landing') }}"><img class="logo_pic" src="{{asset('img/logo.png')}}"></a>
        <label for="toggle-1" class="toggle-menu"><ul><li></li> <li></li> <li></li></ul></label>
        <input type="checkbox" id="toggle-1">
        <nav>
            <ul>
                <li><a href="{{ route('landing') }}">Про нас</a></li>
                <li><a href="{{ route('orthodontics') }}">Ортодонтія</a></li>
                <li><a href="{{ route('therapy') }}">Терапевтія</a></li>
                <li><a href="{{ route('surgery') }}">Хірургія</a></li>
                <li><a href="{{ route('contact') }}">Заявка</a></li>
                <li><a href="{{ route('contact-data') }}">Ваші записи</a></li>
            </ul>
        </nav>
    </div>
</header>
