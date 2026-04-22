<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="post">
        @csrf
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="checkbox" name="remember"> onthoud mij
        <button type="submit">Login</button>
    </form>
    <a href="/register">Heeft u geen acount?</a>
</body>
</html>