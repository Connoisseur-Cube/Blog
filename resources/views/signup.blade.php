<!DOCTYPE html>
<html>
    <body>
        <!-- register.blade.php -->

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Your signup form code here -->
        <h1>Signup</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
        
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>
        
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
        
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
        
            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>
        
            <div>
                <button type="submit">Sign Up</button>
            </div>
        </form>
    </body>
</html>