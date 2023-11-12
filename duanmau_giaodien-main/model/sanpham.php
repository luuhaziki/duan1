<?php
// hiển thị 9 sản phẩm mới nhất 
function loadall_sanpham_home(){
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id DESC LIMIT 0,9";
    $listdanpham = pdo_query($sql);
    return $listdanpham;
}
// hiển thị top 10 sản phẩm có lượt xem cao nhất
function loadall_sanpham_top10(){
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY luotxem DESC LIMIT 0,10";
    $listdanpham = pdo_query($sql);
    return $listdanpham;
}
?>
