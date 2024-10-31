<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="../styles/Main.css" />
    <title>Register</title>
</head>
<?php
require "../db/ConnectToDb.php";
?>

<body class="d-flex justify-content-center align-items-center vh-100 flex-column">
    <div class="container vh-25 d-flex justify-content-center align-items-center">
        <h1>Register !</h1>
    </div>
    <div class="d-flex login-form flex-column vh-75">
    <form action="#" method="post">
        <label for="UserName" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required>
        <label for="emailinput" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" placeholder="name@example.com" required
        >
        <label for="passwordInput">Password</label>
        <input type="password" name="password" class="form-control" required>
        <br>
        <div class="d-flex flex-column">
        <a href="../index.php" class="backtoLogin">⬅️ go back to login</a>
        <button type="submit" class="btn subButton ">Register 😄</button>
    
        </div>
        </form>

    </div>
    </body>
</html>
<?php
if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && !empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
    $userNameRegistered =  $_POST["username"] ;
    $userMailRegistered =  $_POST["email"] ;
    $userPwdRegistered = $_POST["password"];
    
    $sql = " INSERT INTO appuser (username, userMail, password)
    VALUES ('$userNameRegistered'  ,'$userMailRegistered' , '$userPwdRegistered') ";
    
    $conn->query($sql);
}
$conn->close();
?>