<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <h2>Register</h2>
    <form action="register_process.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Name:</label>  
            <div class="col-md-4">
            <input name="username" class="form-control input-md" id="username" type="text" placeholder="Name">       
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput">Password:</label>
            <div class="col-md-4">
            <input name="password" class="form-control input-md" id="password" type="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="E-mail">E-mail:</label>  
            <div class="col-md-4">
            <input name="email" class="form-control input-md" id="email" type="text" placeholder="E-mail">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="filebutton">Upload CV</label>
            <div class="col-md-4">
                <input name="profile_image" class="input-file" id="profile_image" type="file">
            </div>
        </div>
        <input type="submit" value="Register">
    </form>
</body>
</html>

