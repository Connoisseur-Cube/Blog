<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta content="Login">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="background">
        <div class="wrapper">
            <div class="container">

                <h1>Login</h1>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>

                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div>
                        <button type="submit">Login</button>
                    </div>
                </form>

                @if ($errors->any())
                <div style = "color:red">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</body>

</html>
