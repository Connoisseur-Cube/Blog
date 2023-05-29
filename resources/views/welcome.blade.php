<!DOCTYPE html>
<html>

<head>
    <title>Gamer Blog</title>
    <meta content="A website to review games">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    
</head>

<body>

{{-- Background class encompasses everything --}}

    <div class = "background">

{{-- Wrapper to control the position --}}

        <div class="wrapper">

{{-- Sidebar --}}

            <div class="sidebar">

    {{-- Website Icon --}}

                <a href="{{ route('welcome') }}">
                    <div class="image-container">
                    <img src="{{ asset('css/images/Icon.PNG') }}" alt = "Website logo">
                    </div>
                </a>
                <h2 style="font-family: Consolas, monospace; font-size: 20px;"> &nbsp;The Gamer's Grotto</h2>

    {{-- Intro --}}

                <hr>

                <p style="font-family: Consolas, monospace; font-size: 12px; color: yellow;">Welcome to the digital grotto, where passion meets pixels! 
                Whether you're itching to share a review, unleash a rant,
                craft, or guide some noobs,
                this is the place to let your game rants go wild!</p>

                <hr>

    {{-- Log in/Sign up --}}
            
                @guest

                <h3 style="text-align: center">Log-in or Sign-up to create your own blog posts.</h3>
                <h3 style="color: black">Secret text</h3>
                {{-- Yes I know this is lazy way to make space --}}

                <div class="button-container">
                    <div style="margin-bottom: 20px">
                        <a href="{{ route('login') }}"><button>Login</button></a>
                    </div>
                    <div style="margin-bottom: 20px">
                        <a href="{{ route('signup') }}"><button>Signup</button></a>
                    </div>
                </div>

                @else
                    <h3 style="text-align: center"> Welcome, {{ auth()->user()->name }}!</h3>
                    <div class="button-container">

                        <div style="margin-bottom: 20px">
                        <a href="{{ route('posts.create') }}"><button>Create Post</button></a>
                        </div>
                        <div style="margin-bottom: 20px">
                        <a href="{{ route('profile') }}"><button>View Profile</button></a>
                        </div>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <div style="margin-bottom: 20px">
                            <button type="submit">Logout</button>
                            </div>
                        </form>

                    </div>
                @endguest

    {{-- Footer --}}

                <div class="footer">
                   <p> &copy; 2023 Gamer Blog | No rights reserved </p>
                </div>
                
            </div>

{{-- Container --}}

            <div class="container">

                <h1 style="color: yellowgreen; text-align:center;">&#127918; The Gamer's Grotto! &#128293;</h1>
                <hr>

                <h2>Latest Blog Posts:</h2>
                
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

{{-- Closing all divs --}}

          </div>
    </div>
    {{-- <div class="footer">
            <p>2023-2023 some software crap organization, no rights reserved</p>
    </div> --}}
    </body>
</html>