<?php
    session_start();
    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        require_once "database.php";
        $sql = "SELECT * FROM tbl_user WHERE USER_EMAIL='$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if($user){
            if(password_verify($password, $user["USER_PASSWORD"])){
                // Store user information in session
                $_SESSION["user"] = "yes";
                $_SESSION["first_name"] = $user["USER_FNAME"];
                header("Location: index.php");
                die();
            } else {
                echo "<div class='alert alert-danger'> Password does not match! </div>";
            }
        } else {
            echo "<div class='alert alert-danger'> Email does not match </div>";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Login Page </title>
</head>
<body>
    <div class="container">

        <form action="login.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
        
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>
        </form>
        <div><p>Not Registered yet? <a href="registration.php"> Register Here</a></p></div>
    </div>           
</body>
</html>
