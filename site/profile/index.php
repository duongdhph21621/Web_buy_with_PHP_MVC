<?php

require_once("../../dao/users.php");
require_once("../../dao/pdo.php");
require("../../global.php");
// extract($_REQUEST);
$userCookie = $_COOKIE['user'];

$userLogin = unserialize($userCookie);
if (!$userLogin) {
    header("Location: /site/tai_khoan?login");
}


if (exist_param("edit_user_login")) {
    $user_name = $_POST["user_name"];
    $ma_kh = $_POST["ma_kh"];
    $email = $_POST["email"];
    $ho_ten = $_POST["ho_ten"];
    $hinh = save_file("hinh", $UPLOAD_URL);
    if (!$hinh) {
        $hinh = $userLogin["hinh"];
    }
    setcookie('user', '', time() - 3600, '/');

    users_edit_login($user_name, $ho_ten, $email, $hinh, $ma_kh);
    setcookie('user', '', time() - 3600, '/');
    $userLogin = users_select_by_id($ma_kh);
    $userSerialized = serialize($userLogin);
    setcookie('user', $userSerialized, time() + (30 * 60), '/');

    // } else {
    //     users_edit_login_not_img($user_name, $ho_ten, $email, $ma_kh);
    //     setcookie('user', '', time() - 3600, '/');
    //     $userLogin = users_select_by_id($ma_kh);
    //     $userSerialized = serialize($userLogin);
    //     setcookie('user', $userSerialized, time() + (30 * 60), '/');
    // }

    $VIEW_NAME = "profile_form.php";

} else {
    $userCookie = $_COOKIE['user'];

    // Chuyển đổi chuỗi đã serialize thành mảng
    $userLogin = unserialize($userCookie);

    $VIEW_NAME = "profile_form.php";
}

require("../tai_khoan/layout.php");

?>