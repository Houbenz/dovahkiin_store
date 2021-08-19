<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/app.css">
    <title>Login Admin</title>
</head>
<body>

    <div class="main">
            
            <img class="admin_logo" src="images/admin.svg" alt="shield icon">

        <form action="{{route('formAdmin')}}" method="post" class="form_admin">
            
                <h3 class="admin_login_title">Admin Authentication</h3>

                @csrf

                <label class=" login_admin_text" for="email">Email</label>
                <input class="input_login_admin login_admin_text" type="email" name="email" id="email">
                
            
                <label class=" login_admin_text" for="password">Password</label>
                <input class="input_login_admin login_admin_text" type="password" name="password" id="password">
                
                <input class="btn_login login_admin_text" value="Login" type="submit" name="Login Admin" id="loginAdmin">

        </form>
    
    </div>
</body>
</html>