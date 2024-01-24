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
    pdo_execute($sql, $user_name, $mat_khau, $ho_ten, $email, $vai_tro == 1, $kich_hoat == 1, $hinh);

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

?>