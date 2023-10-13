<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <title>solicoders</title>
</head>
<body>




    @auth     {{--  if user is athenticated --}}   

{{--==== Logged in ====--}}

<div class="card my-5 mx-5" style="width: 18rem;">
    <h3>you're logged in !</h3>
    <form action="/logout" method="post">
    @csrf
    <button class="btn btn-warning">log out</button>
    </form>
</div>
{{-- ----------------------------------------------- --}}







{{--==== CREATING A NEW POST  ====--}}

<h2 class="my-5 mx-5">create new post</h2>
   <form action="/create-post" method="POST">
    @csrf 

    <div class="card my-5 mx-5" style="width: 18rem;">
        <input type="text" name="title" placeholder="Post Title"><br>
        <textarea name="body" placeholder="body content ..."></textarea><br>
        <button class="btn btn-primary" >Save post</button>
    </div>
</form>
{{-- ----------------------------------------------- --}}






{{--==== ALL THE POSTS  ====--}}
<h3 class="my-5 mx-5">here all the posts</h3>
{{-- <pre>
{{print_r($posts)}}
</pre> --}}
@foreach ($posts as $post)

<div class="card my-5 mx-5" style="width: 18rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Post name: {{$post['title']}}</li>
      <li class="list-group-item">post body: {{$post['body']}}</li>
      <a href="/edit-post/{{$post['id']}}">edite</a>
      <form action="/delete-post/{{$post['id']}}" method="POST">
        @csrf
        @method('DELETE')
        <button>delete</button>
      </form>


    </ul>
</div>
@endforeach
{{-- ----------------------------------------------- --}}

   


@else   {{--  if user is NOT athenticated --}}   



{{--==== REGISTERING FORM  ====--}}
        <div class="card my-5 mx-5" style="width: 18rem;">
        <h3>register</h3>
        <form action="/register" method="POST">
            @csrf
            <input class="form-control" name="name" type="text" placeholder="Name"><br>
            <input class="form-control" name="email" type="text" placeholder="Email"><br>
            <input class="form-control" name="password" type="password" placeholder="Password"><br>
            <button>register</button><br>
        </form>
    </div>
{{-- ----------------------------------------------- --}}




{{--==== REGISTERING FORM  ====--}}

        <div class="card my-5 mx-5" style="width: 18rem;">


        <h3>allready have an acount ? log in</h3>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" class="form-control" type="text" placeholder="Name"><br>
            <input name="loginpassword" class="form-control" type="password" placeholder="Password"><br>
            <button>log in</button>
        </form>
    </div>    
{{-- ----------------------------------------------- --}}

    @endauth
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>