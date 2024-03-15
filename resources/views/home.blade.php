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
