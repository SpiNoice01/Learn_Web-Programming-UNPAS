<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginDummy</title>
</head>

<body>
    <h1>Halaman Login</h1>
    <form action="homepage.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">

        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <br>
        <button type="submit" name="submit">Login</button>
    </form>

    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyfields") {
            echo "<p style='color: red'>Username dan Password harus diisi</p>";
        } elseif ($_GET["error"] == "wrongusername") {
            echo "<p style='color: red'>Username salah</p>";
        } elseif ($_GET["error"] == "wrongpassword") {
            echo "<p style='color: red'>Password salah</p>";
        }
    }
    ?>
</body>

</html>