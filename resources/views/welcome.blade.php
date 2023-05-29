<!DOCTYPE html>
<html>
    <head>
        <title>Gamer Blog</title>
        <meta content="A website to review games">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        
    </head>

    <body>

    <div class = "background">

        <div class="wrapper">
            <div class="sidebar">
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
                    <a href="{{ route('posts.create') }}"><button>Create Post</button></a>
                    <a href="{{ route('profile') }}"><button>View Profile</button></a>
                @endguest
            </div>
            <div class="container">
                <p>This is the main content of the site. Truely a lol moment for all of us gaymers</p>
                <h2>Latest Posts</h2>
                @if($posts->count() > 0)
                    @foreach($posts as $post)
                        <h3>{{ $post->title }}</h3>
                        <p>{{ $post->content }}</p>
                        <p>Author: {{ $post->user->name }}</p>
                        <hr>
                    @endforeach
                @else
                    <p>No posts</p>
                @endif
            </div>
          </div>
    </div>
    {{-- <div class="footer">
            <p>2023-2023 some software crap organization, no rights reserved</p>
    </div> --}}
    </body>
</html>