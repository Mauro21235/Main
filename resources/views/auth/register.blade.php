<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

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
            box-sizing: border-box;
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

    <form action="/register" method="post">
        @csrf

        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="password_confirmation" placeholder="confirm password">

        <button type="submit">Registreer</button>
        <a href="/login">Heb je al een account?</a>
    </form>

</body>
</html>