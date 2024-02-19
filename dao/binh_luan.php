<?php

require_once("pdo.php");

function binh_luan_select_by_hh($ma_hh)
{

    $sql = "SELECT b.*, kh.user_name  FROM binh_luan b JOIN users kh ON b.ma_kh = kh.ma_kh WHERE b.ma_hh = $ma_hh order by ngay_bl desc";
    return qdo_query($sql);
}

function binh_luan_insert($noi_dung, $ma_hh, $ngay_bl, $ma_kh)
{
    $sql = "INSERT INTO binh_luan(noi_dung, ma_hh, ngay_bl, ma_kh) VALUES (?,?,?,?)";
    pdo_execute($sql, $noi_dung, $ma_hh, $ngay_bl, $ma_kh);

}

function binh_luan_delete($ma_bl)
{

    if (is_array($ma_bl)) {
        $idList = implode(',', $ma_bl);
        $sql = "DELETE FROM binh_luan WHERE ma_bl IN ($idList)";
        // foreach ($ma_bl as $bl) {
        //     $sql = "DELETE FROM binh_luan WHERE ma_bl = $bl";
        pdo_execute($sql);
        // }
    } else {
        $sql = "DELETE FROM binh_luan WHERE ma_bl = $ma_bl";

        pdo_execute($sql);

    }
}


function binh_luan_update($ma_bl, $noi_dung, $ma_hh, $ngay_bl, $ma_kh)
{
    $sql = "UPDATE hang_hoa SET noi_dung = ?, ma_hh = ?, ngay_bl =?, ma_kh =? WHERE ma_bl = ?";

    pdo_execute($sql, $noi_dung, $ma_hh, $ngay_bl, $ma_kh, $ma_bl);
}

function binh_luan_select_by_id($id)
{
    $sql = "SELECT * From binh_luan WHERE ma_bl = $id";
    return qdo_query_one($sql);
}



function binh_luan_select_by_hang_hoa($ma_hh)
{
    $sql = "SELECT b.*, h.ten_hh FROM binh_luan b JOIN hang_hoa h ON b.ma_hh = h.ma_hh WHERE b.ma_hh = $ma_hh ORDER BY b.ngay_bl ASC";
    return qdo_query($sql);
}

function binh_luan_exist($ma_bl)
{
    $sql = "SELECT COUNT(*) FROM binh_luan WHERE ma_bl = $ma_bl";
    return qdo_query($sql);
}
?>