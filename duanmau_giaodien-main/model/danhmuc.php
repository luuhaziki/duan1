<?php
function loadall_danhmuc(){
    $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadall_ten_dm(){
    $sql = "SELECT * FROM danhmuc WHERE id =".$id;
    $dm = pdo_query($sql);
    extract($dm);
    return $name;
}
?>