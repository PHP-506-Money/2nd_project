<header>
    <div class="headerlogo">

        <img src="" alt="">
        <p>FinMate</p>
    </div>
    <div class="headerMain">
        <h1>@yield('header', 'header')</h1>
        @auth
        <nav class="nav">

            {{-- <a href="{{ route('boards.index') }}" class="nav-item {{ Request::is('users/edit') ? '' : 'is-active' }}" active-color="red">홈으로</a>
            <a href="{{ route('users.edit') }}" class="nav-item {{ Request::is('users/edit') ? 'is-active' : '' }}" active-color="blue">회원정보 수정</a>

            <a href="{{ route('users.logout') }}" class="nav-item {{ Request::is('users/logout') ? 'is-active' : '' }}" active-color="green">로그아웃</a> --}}

            <a href="" class="nav-item is-active" active-color="#FF7676">main</a>
            <a href="" class="nav-item is-active" active-color="#FF7676">sign up</a>
            <a href="" class="nav-item is-active" active-color="#FF7676">login</a>





            <span class="nav-indicator"></span>
        </nav>
        @endauth

        @guest
        <nav class="nav">
        <a href="" class="nav-item is-active" active-color="#FF7676">main</a>
        <a href="" class="nav-item is-active" active-color="#FF7676">sign up</a>
        <a href="" class="nav-item is-active" active-color="#FF7676">login</a>




            {{-- <a href="{{ route('users.login') }}" class="nav-item {{ Request::is('users/login') ? 'is-active' : '' }}" active-color="red">로그인 페이지</a>

            <a href="{{ route('users.registration') }}" class="nav-item {{ Request::is('users/registration') ? 'is-active' : '' }}" active-color="blue">회원가입</a> --}}

            <span class="nav-indicator"></span>
        </nav>
        @endguest
    </div>
</header>


<script src="{{ asset('/js/app.js') }}"></script>
