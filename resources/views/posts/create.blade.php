<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
    <meta content="A website to create posts">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

<div class="background">
    <div class="wrapper">
        <div class="sidebar">
            <a href="{{ route('welcome') }}">
                <div class="image-container">
                    <img src="{{ asset('css/images/Icon.PNG') }}" alt="Website logo">
                </div>
            </a>
            <h2 style="font-family: Consolas, monospace; font-size: 20px;">&nbsp;The Gamer's Grotto</h2>
            <hr>
            <p style="font-family: Consolas, monospace; font-size: 12px; color: yellow;">Welcome to the digital grotto, where passion meets pixels! Whether you're itching to share a review, unleash a rant, craft, or guide some noobs, this is the place to let your game rants go wild!</p>
            <hr>

            <div class="button-container">
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

            <div class="footer">
                <p>&copy; 2023 Gamer Blog | No rights reserved</p>
            </div>
        </div>

        <div class="container">
            <h1 style="color: yellowgreen; text-align:center;">&#127918; CREATE POST &#128293;</h1>
            <hr>
            <div class="blog-container">
                <form method="POST" action="{{ route('posts.store') }}">
                    @csrf

                    <label style="color: black" for="title">Title:</label>
                    <input type="text" id="title" name="title" required>

                    <div class="text">
                        <label for="content">Content:</label>
                        <textarea id="content" name="content" required></textarea>
                    </div>

                    <button type="submit">Create Post</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>

