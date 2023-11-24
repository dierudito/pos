<?php 

    include('config.php');
    if (isset($_POST["username"]) and
        isset($_POST["password"]) and
        isset($_POST["name"]) and
        isset($_POST["email"])) {
        
            $Username = $_POST["username"];
            $Password = $_POST["password"];
            $Name = $_POST["name"];
            $Email = $_POST["email"];

            $sql = "INSERT INTO USERS(username, name, password, email) VALUES('$Username', '$Name', '$Password', '$Email')";

            $res = mysqli_query($conn, $sql);            
            
            header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>POS</title>
    <style>
        body{
            background-color: gray;
        }
        .login{
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }
    </style>
</head>
<body>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3>Register</h3>
                        </div>
                        <div class="card-body">
                            <form action="signup.php" method="post">
                                <div>
                                    <div class="mb-3">
                                        <label for="username">Username:</label>
                                        <input type="text" name="username" id="username" class="form-control" required>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <label for="password">Password:</label>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <label for="name">Name:</label>
                                        <input type="text" name="name" id="name" class="form-control" required>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" id="email" class="form-control" required>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="pull-right">
                                <a href="login.php" class="btn btn-info">Login</a>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>