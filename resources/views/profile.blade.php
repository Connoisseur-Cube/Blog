<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <meta content="User Profile">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <div class="background">

        <div class="wrapper">

            <div class="sidebar">

                {{-- Website Icon --}}
            
                    <a href="{{ route('welcome') }}">
                        <div class="image-container">
                        <img src="{{ asset('css/images/Icon.PNG') }}" alt = "Website logo">
                        </div>
                    </a>
                    <h2 style="font-family: Consolas, monospace; font-size: 20px;"> &nbsp;The Gamer's Grotto</h2>
    
                {{-- Profile Sidebar --}}
    
                    <hr>
    
                    <p style="font-family: Consolas, monospace; font-size: 24px; color: yellow; text-align:center">Your Profile</p>
    
                    <hr>
    
                    <h3 style="text-align: center"> Welcome, {{ auth()->user()->name }}!</h3>
                    <div class="button-container">
    
                            <div style="margin-bottom: 20px">
                            <a href="{{ route('posts.create') }}"><button>Create Post</button></a>
                            </div>
    
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div style="margin-bottom: 20px">
                                <button type="submit">Logout</button>
                                </div>
                            </form>
    
                    </div>

    
                    <div class="footer">
                        <p> &copy; 2023 Gamer Blog | No rights reserved </p>
                    </div>
                    
                </div>

                {{-- Container --}}

                <div class="container">

                    <h1>Profile</h1>
                    <hr>

                    <p>Name: {{ $user->name }}</p>
                    <p>Email: {{ $user->email }}</p>

                    <hr>

                    <h2>POST HISTORY:</h2>

                    @foreach($posts as $post)
                        <div class="blog-container">
                        <h2 style = "color:black">{{ $post->title }}</h2>

                        <div class = "text">
                        <p>{{ $post->content }}</p>
                        </div>
                        
                        <a href="{{ route('posts.edit', $post) }}">
                            <button style = "background:black" class="edit-button">Edit</button>
                        </a>
                        <form method="POST" action="{{ route('posts.destroy', $post) }}" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button style = "background:black" type="submit">Delete</button>
                        </form>
                        </div>
                    @endforeach
                
                </div>
            
            {{-- End of content --}}

        </div>

    </div>

</body>

</html>
