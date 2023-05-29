<!DOCTYPE html>
<html>
    <head>
        <title>Create Post</title>
        <meta content="A website to create posts">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <header>
            <h1>Create Post</h1>
        </header>

        <main>
            <form method="POST" action="{{ route('posts.store') }}">
                @csrf

                <div>
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" required>
                </div>

                <div>
                    <label for="content">Content:</label>
                    <textarea id="content" name="content" required></textarea>
                </div>

                <button type="submit">Create</button>
            </form>
        </main>

        <footer>
            <p>2023-2023 some software crap organization, no rights reserved</p>
        </footer>
    </body>
</html>
