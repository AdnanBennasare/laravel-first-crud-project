<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>
<body>

    @auth
    <h3>you're logged in !</h3>
    <form action="/logout" method="post">
    @csrf
    <button>log out</button>
    </form>



   <h2>create new post</h2>
   <form action="/create-post" method="POST"></form>
   @csrf 
   <input type="text" name="title" placeholder="Post Title"><br>
   <textarea name="body" placeholder="body content ..."></textarea><br>
   <button>Save post</button>

    @else
    <div>
        <h3>register</h3>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="Name"><br>
            <input name="email" type="text" placeholder="Email"><br>
            <input name="password" type="password" placeholder="Password"><br>
            <button>register</button><br>
        </form>
    </div>
    <div>
        <h3>allready have an acount ? log in</h3>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="Name"><br>
            <input name="loginpassword" type="password" placeholder="Password"><br>
            <button>log in</button>
        </form>
    </div>     
    @endauth
</body>
</html>