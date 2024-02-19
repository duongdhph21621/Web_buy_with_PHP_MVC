<?php
require_once("../../dao/binh_luan.php");
require_once("../../dao/thong_ke.php");
require_once("../../dao/pdo.php");
require("../../global.php");
// extract($_REQUEST);

if (exist_param("detail")) {
    $ma_hh = $_GET["ma_hh"];
    $ds_bl = binh_luan_select_by_hh($ma_hh);

    $VIEW_NAME = "binh_luan/chi_tiet_bl.php";
} elseif (exist_param("xoa_bl")) {
    $ma_bl = $_GET["ma_bl"];
    binh_luan_delete($ma_bl);
    $ma_hh = $_GET["ma_hh"];
    $ds_bl = binh_luan_select_by_hh($ma_hh);
    $VIEW_NAME = "binh_luan/chi_tiet_bl.php";


} elseif (exist_param("deleteSelected")) {
    $ma_bl = $_POST["ma_bl"];
    binh_luan_delete($ma_bl);
    $ma_hh = $_POST["ma_hh"];
    $ds_bl = binh_luan_select_by_hh($ma_hh);
    $VIEW_NAME = "binh_luan/chi_tiet_bl.php";


} else {
    $thong_ke_bl = thong_ke_binh_luan();
    $VIEW_NAME = "binh_luan/binh_luan.php";

}

require("../layout.php");

?>