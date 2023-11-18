<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div style="border: 3px solid " >
    <b> Register </b>
    <form action="/register" method="POST">
            @csrf
            <input type="text" id="fname" name="fname" placeholder="Full Name" >
            <input type="email" id="email" name="email" placeholder="Email" > 
            <input type="password" id="pass" name="password" placeholder="Password" > <br><br>
            <button>Register</button>
        </form>
    </div>
</body>
</html>