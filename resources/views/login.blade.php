<!DOCTYPE html>
<html>
    <body>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
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
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember Me</label>
            </div>
        
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </body>
</html>