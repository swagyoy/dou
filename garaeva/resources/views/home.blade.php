<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/style_home.css') }}">
</head>
<body>
    <section id="section">
        <h2>Welcome, {{ auth()->user()->name }}</h2>
        <form method="POST" action=" {{ route('logout') }} ">
            @csrf
            <button type="submit" id="logout">Logout</button>
            <label for="message" id="text_mess">введите свое сообщение</label>
            <input type="text" name="message" id="message" required>
            <button name="post_but" id="post" type="submit">отправить</button>
        </form>
    </section>

        <form action="../resources/views/scripts/upload.php" method="post" enctype="multipart/form-data">
            <label>выберите картинку</label>
            <input type="file" name="image" accept="image/png, image/jpeg" required>
            <button type="submit">загрузить</button>
        </form>

</body>
</html>
