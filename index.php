<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
     rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Registration</h2>
                <form action="reg.php" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="login" placeholder="Enter your login" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="pass" placeholder="Enter your password" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="repedpass" placeholder="Repeat your password" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Login</h2>
                <form action="login.php" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="login" placeholder="Enter your login" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="pass" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
