<?php
session_start();
include 'includes/config.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $email;
        header("Location: user-dashboard.php");
    } else {
        $error = "Invalid Email or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Online Job Portal</title>
    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #f3f4f6;
        }

        .container {
            width: 350px;
            margin: 80px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            background: #3b82f6;
            color: white;
            border: none;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #2563eb;
        }

        .link {
            text-align: center;
            margin-top: 15px;
        }

        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Login</h2>

    <?php if (!empty($error)) { ?>
        <p class="error"><?php echo $error; ?></p>
    <?php } ?>

    <form action="" method="POST">
        <input type="email" name="email" placeholder="Enter Email" required>
        <input type="password" name="password" placeholder="Enter Password" required>

        <button type="submit" name="login">Login</button>
    </form>

    <div class="link">
        <p>Don't have an account? <a href="register.php">Register</a></p>
    </div>
</div>

</body>
</html>
