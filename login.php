<?php
require_once ("config.php");
session_start();
if (isset($_SESSION["email"]) && isset($_SESSION["loggedIn"])) {
    header("Location: admin.php");
}
if (isset($_POST["logIn"])) {
    $conn = new mysqli (DB_HOST, DB_USERNAME, DB_PASSWORD);
    $email = $conn->real_escape_string($_POST["email"]);
    $password = sha1( $conn->real_escape_string($_POST["password"]));

    $data = $conn->query("SELECT email FROM users WHERE email = '$email' AND password = '$password'");
    if ($data->num_rows > 0) {
        $_SESSION["email"] = $email;
        $_SESSION["loggedIn"]  = 1;

        header("Location: admin.php");
        exit();
    } else {
        echo "You are really robot";
    }
}


?>
<html>
<body>
    <form action="login.php" method="post">
    <input type="email" name="email" id="email" placeholder="Email">
    <input type="password" name="mypassword" id="password" placeholder="Password">
    <input type="submit" name="logIn" id="logIn" value="Log In">
    </form>
</body>
</html>