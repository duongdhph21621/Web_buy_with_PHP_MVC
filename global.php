<?php
$ROOT_URL = "/xxshop";
$CONTENT_URL = "$ROOT_URL/content";
$ADMIN_URL = "$ROOT_URL/admin";
$SITE_URL = "$ROOT_URL/site";
$UPLOAD_URL = "../../upload/";

function exist_param($filename)
{
    return array_key_exists($filename, $_REQUEST);
}

function save_file($fieldname, $target_dir)
{
    if ($_FILES[$fieldname]) {

        $file_uploaded = $_FILES[$fieldname];
        $file_name = basename($file_uploaded["name"]);
        $target_path = $target_dir . $file_name;
        move_uploaded_file($file_uploaded["tmp_name"], $target_path);
        return $file_name;
    } else {
        return "";
    }
}


?>