<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    
    <style>
        form{
            margin: auto;
            width: 50%;
            border: 6px solid black;
            background:red;
            color:white;
            padding: 10px;
            padding-left: 40%;
        }
        textarea{
            border-style:solid; 
            width: 40%; 
            border-width: 5px;s
        }
   </style>

</head>
<body>
    @if(Session::has('post_update'))
    <span>{{Session::get('post_update')}}</span>
    @endif
    <form method="post" action="{{route('update.post')}}">
        @csrf
        <input type="hidden" name="id" value="{{$post->id}}">
        Things To Do : <br><input type= "text" name= "name" value="{{$post->name}}" style="border-style:solid; width: 40%; border-width: 5px"><br>
        Description : <br><textarea name="description">{{$post->description}}</textarea><br>
        <input type="submit" value="Submit"><br></br>
        <div><a style="background:white; color:black" href="{{route('post.list')}}">View Post List<a></div>
    </form>
</body>
</html>