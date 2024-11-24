<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <style>
        /* Paste the provided CSS styles here */
        body {
            margin: 0;
            color: #ffffff;
            background: conic-gradient(at bottom right, #111827, #6D28D9, #111827);
            font: 600 16px/18px "Open Sans", sans-serif;
        }
        *:after,
        :before {
          box-sizing: border-box;
        }
        .clearfix:after,
        .clearfix:before {
          content: "";
          display: table;
        }
        .clearfix:after {
          clear: both;
          display: block;
        }
        a {
          color: inherit;
          text-decoration: none;
        }
        .container {
          width: 100%;
          margin: auto;
          max-width: 525px;
          min-height: 670px;
          position: relative;
          /* background: url(https://i.ytimg.com/vi/clZ_ujoUvdU/maxresdefault.jpg) no-repeat center; */
          box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
          padding: 90px 70px 50px 70px;
          background-size: cover;
        }
        .form-group {
          margin-bottom: 15px;
        }
        .form-control {
          border: none;
          padding: 15px 20px;
          border-radius: 25px;
          background: rgba(255, 255, 255, 0.1);
          color: #ffffff;
          width: 100%;
        }
        .form-btn {
          text-align: center;
          margin-top: 20px;
        }
        .btn-primary {
          background: #8B5CF6;
          cursor: pointer;
        }
        .btn-primary:hover {
          background: #7C3AED;
        }
        .alert {
          margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
      <form action="login.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
      </form>
     <div><p>Not registered yet <a href="registration.php">Register Here</a></p></div>
    </div>
</body>
</html>
