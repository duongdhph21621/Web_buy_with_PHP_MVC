<?php

require_once("pdo.php");

function users_select_all()
{

    $sql = "SELECT * FROM users";
    return qdo_query($sql);
}

function users_insert($user_name, $mat_khau, $ho_ten, $email, $vai_tro, $kich_hoat, $hinh)
{
    $sql = "INSERT INTO users(user_name,mat_khau,ho_ten,email,vai_tro,kich_hoat,hinh) VALUES (?,?,?,?,?,?,?)";
    pdo_execute($sql, $user_name, $mat_khau, $ho_ten, $email, intval($vai_tro), intval($kich_hoat), $hinh);

}

function users_delete($ma_kh)
{

    $sql = "DELETE FROM users WHERE ma_kh = $ma_kh";
    pdo_execute($sql);
}


function users_update($ma_kh, $user_name, $mat_khau, $ho_ten, $email, $vai_tro, $kich_hoat, $hinh)
{
    $sql = "UPDATE users SET user_name = ?, mat_khau = ?, ho_ten = ?, email = ?, vai_tro = ?, kich_hoat = ?, hinh = ? WHERE ma_kh = ?";

    pdo_execute($sql, $user_name, $mat_khau, $ho_ten, $email, intval($vai_tro), intval($kich_hoat), $hinh, $ma_kh);
}

function users_select_by_id($edit_id)
{
    $sql = "SELECT * From users WHERE ma_kh = $edit_id";
    return qdo_query_one($sql);
}

function check_user_login_user_name($user_name)
{
    $sql = "SELECT * FROM users WHERE user_name = ?";
    return qdo_query_one($sql, $user_name);


}

function check_user_change_pass($user_name, $email)
{
    $sql = "SELECT * FROM users WHERE user_name = ? AND email = ?";
    return qdo_query_one($sql, $user_name, $email);
}

function update_password($user_name, $email, $password)
{
    $sql = "UPDATE users SET mat_khau = ? WHERE user_name =? AND email =?";
    return pdo_execute($sql, $password, $user_name, $email);
}
?>