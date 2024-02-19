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

} else if (exist_param('signup')) {
    $VIEW_NAME = 'dang_ky_form.php';
} else if (exist_param('forgotPass')) {
    $VIEW_NAME = 'quen_pass_form.php';
} else if (exist_param('submit_signup')) {
    $user_name = $_POST["user_name"];
    $email = $_POST["email"];
    $ho_ten = $_POST["ho_ten"];
    $hinh = save_file("image", $UPLOAD_URL);
    $mat_khau = $_POST["mat_khau"];
    $vai_tro = intval($_POST["vai_tro"]);
    $kich_hoat = intval($_POST["kich_hoat"]);


    users_insert($user_name, $mat_khau, $ho_ten, $email, $vai_tro, $kich_hoat, $hinh);

    $VIEW_NAME = "dang_nhap_form.php";
} else if (exist_param("submit_login")) {
    $user_name = $_POST["firstname"];
    $password = $_POST["password"];

    $user = check_user_login_user_name($user_name);
    if ($user) {
        if ($user["mat_khau"] == $password) {
            if ($user["kich_hoat"] == 1) {
                $userSerialized = serialize($user);
                setcookie('user', $userSerialized, time() + (30 * 60), '/');
                if ($user["vai_tro"] == 1) {
                    header("Location: /admin/thong_ke");
                } else {
                    header("Location: /site/trang_chu");
                }
            } else {
                $MESSAGE = "Tài khoản bị khóa";
                $VIEW_NAME = "dang_nhap_form.php";
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
} else if (exist_param("submit_change_pass")) {
    $user_name = $_POST["firstname"];
    $email = $_POST["email"];
    $new_password = $_POST["Newpassword"];

    $user = check_user_change_pass($user_name, $email);
    if ($user) {
        update_password($user_name, $email, $new_password);
        header("Location: /site/tai_khoan?login");
    } else {
        $MESSAGE = "Sai username hoặc email";
        $VIEW_NAME = "quen_pass_form.php";
    }

}

require("../tai_khoan/layout.php");

?>