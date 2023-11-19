<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    @auth
        <p>
            You just logged in 
        </p>

        <form action="/logout" method="POST">
            @csrf
            <button>logout</button>
        </form>
    @else 

    <div style="border: 3px solid " >
        <b> Register </b>
        <form action="/register" method="POST">
                @csrf
                <input type="text" id="name" name="name" placeholder="Full Name" >
                <input type="email" id="email" name="email" placeholder="Email" > 
                <input type="password" id="pass" name="password" placeholder="Password" > <br><br>
                <button>Register</button>
        </form>
    </div>
    <div style="border: 3px solid " >
        <b> Login </b>
        <form action="/login" method="POST">
                @csrf
                <input type="text" id="loginname" name="loginname" placeholder="Full Name" >
                <input type="password" id="loginpass" name="loginpassword" placeholder="Password" > <br><br>
                <button>Login</button>
        </form>
    </div>

    @endauth

</body>
</html>