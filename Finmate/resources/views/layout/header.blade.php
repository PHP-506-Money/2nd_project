<header>
    <div class="headerlogo">

        <img src="{{ asset('/img/logo1.png') }}" alt="로고">

        <p>FinMate</p>
    </div>
    <div class="headerMain">
        <h1>@yield('header', 'header')</h1>
        @auth
        <nav class="nav">
            <a href="" class="nav-item is-active" active-color="#FF7676">main</a>
            <a href="" class="nav-item is-active" active-color="#FF7676">sign up</a>
            <a href="" class="nav-item is-active" active-color="#FF7676">login</a>
            <span class="nav-indicator"></span>
        </nav>
        @endauth

        @guest
        <nav class="nav">
        <a href="/" class="nav-item is-active" active-color="#FF7676">main</a>
        <a href="{{ route('users.registration') }}" class="nav-item {{ Request::is('users/registration') ? 'is-active' : '' }}" active-color="#FF7676">sign up</a>
        <a href="{{ route('users.login') }}" class="nav-item {{ Request::is('users/login') ? 'is-active' : '' }}" active-color="#FF7676">login</a>
            <span class="nav-indicator"></span>
        </nav>
        @endguest
    </div>
</header>


<script src="{{ asset('/js/app.js') }}"></script>
