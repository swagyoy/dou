<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style_login.css') }}">
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email" >Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <button class="logT" type="submit">Login</button>
    </form>
</body>
</html>
