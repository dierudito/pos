<?php 
    session_start();
    if (!isset($_SESSION)) {        
        print "<script>location.href='index.php';</script>";
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
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">System X</a>
            <?php 
                echo "Welcome, ".$_SESSION["username"];
                print "<a href='logout.php' class='btn btn-danger'>Logout</a>"
            ?>
        </div>
    </nav>
</body>
</html>