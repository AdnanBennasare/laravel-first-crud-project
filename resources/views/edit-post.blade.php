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
    {{--==== CREATING A NEW POST  ====--}}

    <div class="card my-5 mx-5" style="width: 18rem;">
<h2 class="my-5 mx-5">create new post</h2>
<form action="/edit-posts/{{$post['id']}}" method="POST">
 @csrf 
@method('PUT')
     <input type="text" name="title" placeholder="Post Title" value="{{$post['title']}}"><br>
     <textarea name="body" placeholder="body content ...">{{$post['body']}}</textarea><br>
     <button class="btn btn-primary" >Save changes</button>
    </form>
</div>
{{-- ----------------------------------------------- --}}
</body>
</html>