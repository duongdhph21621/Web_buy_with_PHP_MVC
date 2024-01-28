<?php

require_once("../../dao/users.php");
require_once("../../dao/pdo.php");
require("../../global.php");
// extract($_REQUEST);

if (exist_param("login")) {
    if (isset($_COOKIE['user'])) {
        $userCookie = $_COOKIE['user'];
        $userLogin = unserialize($userCookie);
        if ($userLogin) {
            header("Location: /site/trang_chu");
        }
    }

    $VIEW_NAME = "dang_nhap_form.php";

} else if (exist_param("submit_login")) {
    $user_name = $_POST["firstname"];
    $password = $_POST["password"];

    $user = check_user_login_user_name($user_name);
    if ($user) {
        if ($user["mat_khau"] == $password) {
            $userSerialized = serialize($user);
            setcookie('user', $userSerialized, time() + (30 * 60), '/');
            if ($user["vai_tro"] == 1) {
                header("Location: /admin/thong_ke");
            } else {
                header("Location: /site/trang_chu");
            }

        } else {
            $MESSAGE = "Sai Mật Khẩu";
            $VIEW_NAME = "dang_nhap_form.php";

        }
    } else {
        $MESSAGE = "Sai Username";
        $VIEW_NAME = "dang_nhap_form.php";

    }

} else if (exist_param("logout")) {
    setcookie('user', '', time() - 3600, '/');
    header("Location: /site/tai_khoan?login");
}

require("../tai_khoan/layout.php");

?>