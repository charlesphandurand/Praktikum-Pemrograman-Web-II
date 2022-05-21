<?php
session_start();
function login($table, $struktur, $nomor_member, $password)
{
    $result = mysqli_query($GLOBALS['connect'], "SELECT * FROM $table WHERE $struktur = '$nomor_member'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            header("Location: index.php");
            exit;
        }
    }
}
