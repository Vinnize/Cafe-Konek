<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
    <title>Register Form</title>
</head>
<body>  
    <div class="container">
        <h1>
            Register to Cafe Konek
        </h1>
        <form action="registerprocess.php" method="POST">
            <div class="form1">
                <input type="text" class="form-control" name= "Firstname" placeholder= "Firstname" >
            </div>
            <div class="form1">
                <input type="text" class="form-control" name= "Lastname" placeholder= "Lastname" >
            </div>
            <div class="form1">
                <input type="email" class="form-control" name= "Email" placeholder= "Email" >
            </div>
            <div class="form1">
                <input type="password" class="form-control" name= "Password" placeholder= "Password" >
            </div>
            <div class="form1">
                <input type="password" class="form-control" name= "Confirmpassword" placeholder= "Confirmpassword" >
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary"value= "Register" name="submit">
            </div>
        </form>
        <div><p>Already registered ?<a href="login.php"> Login Now </a></p></div>
    </div>
</body>
</html>