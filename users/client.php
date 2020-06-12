<?php
session_start();
include 'D:\openio\openserver\domains\lab2\users.php';
include 'D:\openio\openserver\domains\lab2\lang.php';

if($_GET["exit"]){
    session_destroy();
    header("D:\openio\OpenServer\domains\lab2\login\index.html");
}

if (isset($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'];
}

if (!(isset($_SESSION['login'])) && (!(isset($_SESSION['password'])))){
    session_destroy();
    header("D:\openio\OpenServer\domains\lab2\login\index.html");
}

class User{
    public $login;
    public $password;
    public $name;
    public $surname;
    public $role;
    public $langhi;
    public $langinfo;

    function __construct($login,$password,$name,$surname,$role,$langhi,$langinfo)
    {
        $this->login = $login;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->role = $role;
        $this->langhi = $langhi;
        $this->langinfo = $langinfo;
    }
}

class admin extends user {

    public function introduce (){
        echo $this ->langhi . $this->name. "  " . $this->surname. "  ". $this ->langinfo;
    }
}
class manager extends user {

    public function introduce (){
        echo $this ->langhi . $this->name. "  " . $this->surname. "  ". $this ->langinfo;
    }
}
class client extends user {

    public function introduce (){
        echo $this ->langhi . $this->name. "  " . $this->surname. "  ". $this ->langinfo;
    }
}
switch($_SESSION['role']) {
    case 'admin';
        for ($m = 0; $m < count($users); $m++) {
            if (($_SESSION['login'] == $users[$m]['login']) && !(isset($_GET['lang']))) {
                switch ($users[$m]['lang']) {
                    case 'ru';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[5]['ru']);
                        break;
                    case 'en';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[5]['en']);
                        break;
                    case 'ua';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[5]['ua']);
                        break;
                    case 'it';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['it'], $lang[5]['it']);
                        break;
                }
                $admin->introduce();
            }
            if (($_SESSION['login'] == $users[$m]['login']) && (isset($_GET['lang']))) {
                switch ($_GET['lang']) {
                    case 'ru';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[5]['ru']);
                        break;
                    case 'en';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[5]['en']);
                        break;
                    case 'ua';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[5]['ua']);
                        break;
                    case 'it';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['it'], $lang[5]['it']);
                        break;
                }
                $admin->introduce();
            }
        }
        break;
    case 'manager';
        for ($m = 0; $m < count($users); $m++) {
            if (($_SESSION['login'] == $users[$m]['login']) && !(isset($_GET['lang']))) {
                switch ($users[$m]['lang']) {
                    case 'ru';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[5]['ru']);
                        break;
                    case 'en';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[5]['en']);
                        break;
                    case 'ua';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[5]['ua']);
                        break;
                    case 'it';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['it'], $lang[5]['it']);
                        break;
                }
                $manager->introduce();
            }
            if (($_SESSION['login'] == $users[$m]['login']) && (isset($_GET['lang']))) {
                switch ($_GET['lang']) {
                    case 'ru';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[5]['ru']);
                        break;
                    case 'en';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[5]['en']);
                        break;
                    case 'ua';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[5]['ua']);
                        break;
                    case 'it';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['it'], $lang[5]['it']);
                        break;
                }
                $manager->introduce();
            }
        }
        break;
    case 'client';
        for ($m = 0; $m < count($users); $m++) {
            if (($_SESSION['login'] == $users[$m]['login']) && !(isset($_GET['lang']))) {
                switch ($users[$m]['lang']) {
                    case 'ru';
                        $client = new client($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[3]['ru']);
                        break;
                    case 'en';
                        $client = new client($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[3]['en']);
                        break;
                    case 'ua';
                        $client = new client($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[3]['ua']);
                        break;
                    case 'it';
                        $client = new client($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['it'], $lang[3]['it']);
                        break;
                }
                $client->introduce();
            }
            if (($_SESSION['login'] == $users[$m]['login']) && (isset($_GET['lang']))) {
                switch ($_GET['lang']) {
                    case 'ru';
                        $client = new client($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[3]['ru']);
                        break;
                    case 'en';
                        $client = new client($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[3]['en']);
                        break;
                    case 'ua';
                        $client = new client($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[3]['ua']);
                        break;
                    case 'it';
                        $client = new client($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['it'], $lang[3]['it']);
                        break;
                }
                $client->introduce();
            }
        }
        break;
}
?>
<head>
    <title>Страница Клиента</title>
</head>
<form >
    <select name="lang" method="GET">
        <option value="ru">Русский</option>
        <option value="ua">Українська</option>
        <option value="en">English</option>
        <option value="it">Italian</option>
    </select>
    <input type="submit" value="Save">
</form>

<form method="GET">
    <input type="submit" name="exit"  value="Exit">
</form>

<form name = "test" action = "admin.php" method = "post">
    <button><font color ="black">Админ</font></button>
</form>
<form name = "test" action = "manager.php" method = "post">
    <button><font color ="black">Мененджер</font></button>
</form>
