<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>
</head>
<body>


    <form action="{{route('formAdmin')}}" method="post">

        <fieldset>
            @csrf
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email">
    
            <br>
    
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password">
    
            <input type="submit" name="Login Admin" id="loginAdmin">
        </fieldset>
    </form>
    
</body>
</html>