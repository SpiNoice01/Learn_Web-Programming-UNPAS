<?php
if (!isset($_POST["submit"])) {
    header("Location: login.php");
    exit;
}

$username = $_POST["username"] ?? '';
$password = $_POST["password"] ?? '';

if (empty($username) || empty($password)) {
    header("Location: login.php?error=emptyfields");
    exit;
}

if ($username !== "detomaso") {
    header("Location: login.php?error=wrongusername");
    exit;
}

if ($password !== "pantera") {
    header("Location: login.php?error=wrongpassword");
    exit;
}
?>

<!-- ======================================================================= -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>postLogin</title>
</head>

<body>
    <h1>Selamat Datang</h1>

    <?php
    echo "<p>Username : " . $_POST["username"] . "</p>";
    echo "<p>Password : " . $_POST["password"] . "</p>";
    ?>
</body>

</html>