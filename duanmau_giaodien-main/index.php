<?php
include "model/pdo.php";
include "model/sanpham.php";
include "global.php";

    include "view/header.php";
    $spnew = loadall_sanpham_home();
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "chitietsanpham":
                include "view/chitietsanpham.php";
                break;
        }
    }else{
        include "view/home.php";
    }
   
    include "view/footer.php";
?>

        
