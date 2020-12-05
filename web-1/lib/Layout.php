<?php

class Layout {
    public function getHeader()
    {
        require "./inc/header.php";
    }
    public function getFooter()
    {
        require "./inc/footer.php";
    }
    public function getBanner()
    {
        require "./inc/banner.php";
    }

}

$layO = new Layout;