<?php
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
require "Koneksi.php";
require "Login.php";

if (isset($_POST["login"])) {
    $nomor_member = $_POST["nomor_member"];
    $password = $_POST["password"];

    login("member", "nomor_member", $nomor_member, $password);
    $error = true;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <?php if (isset($error)) : ?>
        <div class="container mt-5 w-50">
            <div class="row">
                <div class="alert alert-danger" role="alert">
                    Nomor member/password yang dimasukkan salah!!!
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="mt-5">Form Login</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <form action="" method="POST">
                    <label for="nomor_member" class="mb-1 fw-bold ">Nomor Member</label>
                    <input type="text" name="nomor_member" class="form-control mb-3 " placeholder="nomor member">
                    <label for="password" class="mb-1 fw-bold">Password</label>
                    <input type="password" name="password" class="form-control mb-3" placeholder="password">
                    <div class="d-grid gap-2 d-md-flex justify-content-sm-end">
                        <button type="submit" name="login" class="btn btn-primary btn-lg">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>