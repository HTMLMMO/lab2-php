<?php
session_start();
include 'D:\openio\OpenServer\domains\lab2\users.php';
$login = $_POST["login"];
$password = $_POST["password"];

for ($i = 0;$i<count($users);$i++)
{
    if (($login == $users[$i]['login']) && ($password == $users[$i]['password'])) {
        $_SESSION['login'] = $users[$i]['login'];
        $_SESSION['password'] = $users[$i]['password'];
        if ($users[$i]['role'] == 'admin'){
            $_SESSION['role'] = $users[$i]['role'];
            header('Location: ..\users\admin.php');
        }elseif ($users[$i]['role'] == 'manager'){
            $_SESSION['role'] = $users[$i]['role'];
            header('Location: ..\users\manager.php');
        }elseif ($users[$i]['role'] == 'client'){
            $_SESSION['role'] = $users[$i]['role'];
            header('Location: ..\users\client.php');
        }
    }
}
