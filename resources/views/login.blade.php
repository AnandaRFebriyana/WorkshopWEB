<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="sign up/in style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Jost', sans-serif;
            background: linear-gradient(90deg, #C7C5F4, #776BCC);
        }
        .main {
            width: 350px;
            height: 400px;
            background: linear-gradient(90deg, #5D54A4, #7C78B8);
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 5px 20px 50px #000;
        }
        input {
            width: calc(100% - 40px); /* Adjusted width */
            height: 20px;
            background: #e0dede;
            display: block;
            margin: 20px 20px; /* Adjusted margin */
            padding: 10px;
            border: none;
            outline: none;
            border-radius: 5px;
        }
        button {
            width: 60%;
            height: 40px;
            margin: 10px auto;
            justify-content: center;
            display: block;
            color: #fff;
            background: #573b8a;
            font-size: 1em;
            font-weight: bold;
            margin-top: 20px;
            outline: none;
            border: none;
            border-radius: 5px;
            transition: .2s ease-in;
            cursor: pointer;
        }
        button:hover {
            background: #6d44b8;
        }
        .login {
            height: 300px;
            background: #eee;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 25px;
            padding: 20px;
        }

        input[type="email"],
        input[type="password"] {
            width: calc(100% - 40px);
            height: 20px;
            background: #e0dede;
            margin-left: 20px; /* Adjusted margin-left */
            padding: 10px;
            border: none;
            outline: none;
            border-radius: 5px;
        }

        .login label {
            color: #573b8a;
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
            margin-left: 20px; /* Adjusted margin-left */
        }

        .register-link {
            margin-top: 10px; /* Tambahkan jarak atas */
            text-align: center; /* Pusatkan teks */
            color: #573b8a;
            font-size: 0.9em; /* Ukuran font yang lebih kecil */
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="login">
            <form action="/login" method="POST">
                @csrf
                <label>Login</label>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <button type="submit">Login</button>
            </form>
            <span class="register-link">Belum punya akun? <a href="/register">Register</a></span>
        </div>
    </div>
</body>
</html>