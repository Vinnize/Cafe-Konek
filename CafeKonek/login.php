<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Log-in Form</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to Cafe Konek</h1>
        <form action="loginprocess.php" method="POST">
            <div class="form1">
                <input type="email" class="form-control" name="Email" placeholder="Email" required>
            </div>
            <div class="form1">
            <input type="password" class="form-control" name="Password" placeholder="Password" required>
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Log-in" name="submit">
            </div>
        </form>
        <div><p> Not yet Registered? <a href="register.php">Register Now</a> </p></div>
    </div>
</body>
</html>