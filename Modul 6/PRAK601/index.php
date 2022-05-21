<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ErrorPage.php");
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Menu Index</title>
    <style>
        a {
            text-decoration: none;
        }

        .list-group {
            margin: 0 auto;
        }

        h1 {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="list-group w-50">
        <h1 class="text-center">Menu Index</h1>
        <a href="Member.php"><button type="button" class="list-group-item list-group-item-action">Member</button></a>
        <a href="Buku.php"><button type="button" class="list-group-item list-group-item-action">Buku</button></a>
        <a href="Peminjaman.php"><button type="button" class="list-group-item list-group-item-action">Peminjaman</button></a>
        <a href="Logout.php" onclick="return confirm('Log Out?')"><button type="submit" name="login" class="btn btn-danger mt-3">Log Out</button></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>