<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CRUD App </title>
</head>

<body>
    @auth
    <p> You are logged in </p>
    <form action="/logout" method="post">
        @csrf
        <button> Log out </button>
    </form>

    <div style="border: 3px solid black;">
        <h2> Create a new post </h2>
        <form action="/create-post" method="post">
            @csrf
            <input type="text" name="title" placeholder="Post Title">
            <textarea name="body" id="" placeholder="Body content..."></textarea>
            <button> Save Post </button>
        </form>
    </div>

    <div style="border: 3px solid black;">
        <h2> All Posts </h2>
        @foreach ($posts as $post)

        <div style="background-color: gray; padding: 10px; margin: 10px;">
            <h3>{{$post['title']}} by {{$post->user->name}} </h3>
            {{$post['body']}}
            <p> <a href="/edit-post/{{$post->id}}"> Edit </a> </p>
            <form action="/delete-post/{{$post->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </div>

        @endforeach

    </div>

    @else
    <div style="border: 3px solid black;">
        <h2>Register</h2>
        <form action="/register" method="post">
            @csrf
            <input type="text" name="name" id="name" placeholder="Name">
            <input type="text" name="email" id="email" placeholder="Email">
            <input type="password" name="password" id="password" placeholder="Password">
            <button> Register </button>
        </form>
    </div>
    <div style="border: 3px solid black;">
        <h2>Login</h2>
        <form action="/login" method="post">
            @csrf
            <input type="text" name="loginemail" id="loginemail" placeholder="Email">
            <input type="password" name="loginpassword" id="loginpassword" placeholder="Password">
            <button> Login </button>
        </form>
    </div>
    @endauth

</body>

</html>
