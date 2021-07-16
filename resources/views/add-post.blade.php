<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>

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
    @if(Session::has('post_add'))
    <span>{{Session::get('post_add')}}</span>
    @endif
    <form method="post" action="{{route('save.post')}}">
        Things To Do : <br><input type= "text" name= "name" value="" style="border-style:solid; width: 40%; border-width: 5px"><br>
        Description : <br><textarea name="description"> </textarea><br>
        <input type="submit" value="Submit"><br></br>
        <div><a style="background:white; color:black" href="post-list" class="underline text-gray-900 dark:text-white">View Post List<a></div>
    </form>
</body>
</html>