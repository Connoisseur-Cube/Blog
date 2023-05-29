<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <meta content="User Profile">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <header>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </header>

        <main>
            <h1>Profile</h1>
            <p>Name: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>

            <h2>Posts</h2>
            @foreach($posts as $post)
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->content }}</p>
                <a href="{{ route('posts.edit', $post) }}">Edit</a>
                <form method="POST" action="{{ route('posts.destroy', $post) }}" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <hr>
            @endforeach
        </main>

        <footer>
            <!-- Footer content -->
        </footer>
    </body>
</html>
