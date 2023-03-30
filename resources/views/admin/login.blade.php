<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin panel login</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
        }

        .auth-form__container {
            height: 100px;
            width: 250px;
            border: 1px solid #636b6f;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            padding-left: 15px;
            padding-right: 15px;
            font-size: 16px;
            border-radius: 5px;
        }

        .auth-form__container > input {
            height: 35px;
            padding-left: 15px;
            padding-right: 15px;
        }
        .login-btn {
            background-color: dodgerblue;
            border: 1px solid #636b6f;
            color: white;
            border-radius: 2px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        @if($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif
        @if(session()->has('message'))
            {!! session()->get('message') !!}
        @endif
        <form method="POST" action="{{route('post-login')}}">
            <div class="auth-form__container">
                @csrf
                <input name="password" type="password" placeholder="Enter admin password here" maxlength="20" required>
                <input class="login-btn" type="submit" value="Enter">
            </div>
        </form>
    </div>
</div>
</body>
</html>

