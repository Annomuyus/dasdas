<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<link rel="stylesheet" href="login.css" />

<body>
    <div class="centercontent">

        <form method="POST" id="box" class="margin" action="logfun.php">
            <h1 style="color: rgb(255, 255, 255);margin-left: 60px;">Ini Form Login</h1>
            <hr class="solid">
            <label for="name">Email: </label><br>
            <input type="email" id="name" name="email" placeholder="Your Email" class="inputbox"><br>
            <label for="password">Password:</label><br>
            <input type="text" id="pass" name="pass" placeholder="Your Password" class="inputbox">
            <hr class="solid">
            <input class="button" type="submit" value="LOGIN!"><br><br>
            <a href="regi.php" class="link">DAFTARKAN AKUN!</a>
        </form>

    </div>
</body>

</html>