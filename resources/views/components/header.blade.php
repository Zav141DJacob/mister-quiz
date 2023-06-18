@guest
    <div class="top-left-corner">

        <a class="blue-btn" href="{{ route('login') }}">Login</a>

        <a class="blue-btn" href="{{ route('register') }}">Register</a>
    </div>
@endguest

<a class="top-right-corner blue-btn" href="{{ route('leaderboard') }}">Leaderboard</a>

@auth
    <a class="bottom-right-corner red-btn" href="{{ route('logout') }}">Logout</a>
@endauth
