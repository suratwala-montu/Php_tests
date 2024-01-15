<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <h2>Login</h2>
    <form action="login_process.php" method="post">
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Username:</label>  
            <div class="col-md-4">
            <input name="username" class="form-control input-md" id="username" type="text" placeholder="Name" required>       
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput">Password:</label>
            <div class="col-md-4">
            <input name="password" class="form-control input-md" id="password" type="password" placeholder="Password" required>
            </div>
        </div>
        <input type="submit" value="Login">
    </form>
</body>
</html>
