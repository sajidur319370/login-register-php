<?php
session_start();
$errors = [
    "register" => $_SESSION["register_error"] ?? "",
    "login" => $_SESSION["login_error"] ?? ""
];
$activeForm = $_SESSION["active_form"] ?? "login";
session_unset();

function showError($error)
{

    return !empty($error) ? "<p class='error-message'>$error</p>" : "";
}

function isActiveForm($form_name, $activeForm)
{
    return $form_name === $activeForm ? "active" : "";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login-register</title>
</head>

<body>
    <div class="container">
        <div class="form-box <?= isActiveForm('login', $activeForm) ?>" id="login-form">
            <form action="login_register.php" method="post">
                <h2>Login</h2>
                <?= showError($errors["login"]); ?>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <Button type="submit" name="login">Login</Button>
                <p>Don't have an account?<a href="#" onclick="showForm('register-form')"> Register </a></p>
            </form>
        </div>
        <div class="form-box <?= isActiveForm('register', $activeForm) ?>" id="register-form">
            <form action="login_register.php" method="post">
                <h2>Register</h2>
                <?= showError($errors["register"]); ?>
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <select name="role" required>
                    <option> --Select Role-- </option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                <Button type="submit" name="register">Register</Button>
                <p>Already have an account?<a href="#" onclick="showForm('login-form')"> Login </a></p>
            </form>
        </div>
    </div>

    <script src="index.js"></script>
</body>

</html>