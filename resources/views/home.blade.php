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

        <div style="border: 3px solid " >
            <b> Create NEW Post </b>
            <form action="/create_post" method="POST">
                @csrf
                <input type="text" name="title" id="" placeholder="post title">
                <textarea name="body" id="" cols="30" rows="10" placeholder="body content... "></textarea>
                <button>Save Post</button>
            </form>
        </div>
        
        <div style="border: 3px solid " >
            <b> My posts  </b>
            @foreach ($posts as $item)
            <div style="background-color: #659BDB">
                <h3>{{$item['title']}}</h3>
                <p>
                    {{$item['body']}}
                </p>
            </div>
                
            @endforeach
        </div>
        
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