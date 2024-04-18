<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "poppins", sans-serif;
        }

        body{
            width: 100vw;
            height: 100vh;
            display:flex;
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(to right, black, gray 270%);
        }

        .container {
            background-color: whitesmoke;
            padding: 6px;
            width:350px;
            height: 450px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 0 30px 0 gray;
        }

        form{
            position: relative;
            margin-top: 80px;
            transition: .5s;
            width: 300px;
            height: 400px;
        }

        .buttonsForm{
            margin-top: 40px;
            position: relative;
            border-radius: 30px;
            box-shadow: 0 0 7px 0 blueviolet;
        }

        .buttonsForm button{
            cursor: pointer;
            background: transparent;
            border: none;
            position: relative;
            padding: 10px 29px;
        }

        .btnColor{
            position: absolute;
            width: 108px;
            height: 100%;
            background: linear-gradient(to right, blue blueviolet);
            border-radius: 30px;
            transition: .3s;
        }

        input[type="text"], input[type="password"] {
            border: none;
            margin-top: 40px;
            border-radius: 60px;
            padding: 8px 0 8px 35px;
            outline: none;
            width: 100%;
        }

        button[type="submit"]{
            background:blueviolet;
            color: white;
            border-radius: 30px;
            width: 100%;
            border: none;
            outline: none;
            padding: 8px 0 8px 15px;
            font-size: 15px;
        }

        .logo {
        margin-left:0;
        font-size: 32px;
        color: black;
        text-decoration: none;
        font-weight: 700;
    }

    </style>
</head>
<body>

   <div class="container">
    <a href="{{url('/')}}" class="logo">Logo</a>
    <div class="buttonsForm">
        <div class="btnColor"></div>
        <button id="btnSignin">Sign In</button>
        <button id="btnSignup">Sign Up</button>
    </div>

    <form id="signin">
        <input type="text" placeholder="E-mail" required>
        <i class="fas fa-envelope iEmail"></i>
        <input type="password" placeholder="Senha" required>
        <i class="fas fa-lock iPassword"></i>
        <div class="divCheck">
            <input type="checkbox" />
            <span>Remember Password</span>
        </div>
        <button type="submit">Sign in</button>
    </form>

    <form id="signin">
        <input type="text" placeholder="E-mail" required>
        <i class="fas fa-envelope iEmail"></i>
        <input type="password" placeholder="Senha" required>
        <i class="fas fa-lock iPassword2"></i>
        <div class="divCheck">
            <input type="checkbox" />
            <span>Terms</span>
        </div>
        <button type="submit">Sign up</button>
    </form>

   </div>

</body>
</html>





