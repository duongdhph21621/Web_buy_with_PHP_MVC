<?php

require_once("../../dao/users.php");
require_once("../../dao/pdo.php");
require("../../global.php");
// extract($_REQUEST);

if (exist_param("edit_user_login")) {
    $user_name = $_POST["user_name"];
    $email = $_POST["email"];
    $ho_ten = $_POST["ho_ten"];
    $hinh = save_file("image", $UPLOAD_URL);

    if ($hinh) {
        users_insert_edit_login($user_name, $ho_ten, $email, $hinh);
    } else {
        users_insert_edit_login_not_img($user_name, $ho_ten, $email);
    }


} else {
    $userCookie = $_COOKIE['user'];

    // Chuyển đổi chuỗi đã serialize thành mảng
    $userLogin = unserialize($userCookie);

    $VIEW_NAME = "profile_form.php";
}

require("../tai_khoan/layout.php");

?>