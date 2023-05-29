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
            <a href="{{ route('login') }}"><button>Login</button></a>
            <a href="{{ route('signup') }}"><button>Signup</button></a>
        </header>

        <main>
            <p>This is the main content of the site. Truely a lol moment for all of us gaymers</p>
        </main>

        <footer>
            <p>2023-2023 some software crap organization, no rights reserved</p>
        </footer>
    </body>
</html>