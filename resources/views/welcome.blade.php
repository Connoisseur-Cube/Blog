<!DOCTYPE html>
<html>
    <head>
        <title>Gamer Blog</title>
        <meta content="A website to review games">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <header>
            <h1>Welcome to the Website</h1>
            @guest
                <a href="{{ route('login') }}"><button>Login</button></a>
                <a href="{{ route('signup') }}"><button>Signup</button></a>
            @else
                <p>Welcome, {{ auth()->user()->name }}!</p>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @endguest
        </header>

        <main>
            <p>This is the main content of the site. Truely a lol moment for all of us gaymers</p>
        </main>

        <footer>
            <p>2023-2023 some software crap organization, no rights reserved</p>
        </footer>
    </body>
</html>