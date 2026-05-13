<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body{
            font-family: Arial;
            background: #f4f4f4;
        }

        form{
            width: 300px;
            margin: 100px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }

        input{
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }

        button{
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background: black;
            color: white;
            border: none;
        }

        a{
            display: block;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <form action="/login" method="post">
        @csrf

        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">

        <input type="checkbox" name="remember"> onthoud mij

        <button type="submit">Login</button>

        <a href="/register">Geen account?</a>
    </form>

</body>
</html>