<!DOCTYPE html>
<html>
    <head>
        <title>Edit Post</title>
        <meta content="Edit Post">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <header>
            <!-- Header content -->
        </header>

        <main>
            <h1>Edit Post</h1>

            <form method="POST" action="{{ route('posts.update', $post) }}">
                @csrf
                @method('PUT')

                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="{{ $post->title }}" required>

                <label for="content">Content:</label>
                <textarea id="content" name="content" required>{{ $post->content }}</textarea>

                <button type="submit">Update Post</button>
            </form>
        </main>

        <footer>
            <!-- Footer content -->
        </footer>
    </body>
</html>
