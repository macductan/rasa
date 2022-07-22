<?php
$data["base_url"] = base_url();
$data['dir_anh'] = 'upload/sanpham/';
$data["template"] = $template;
$data["trang_hientai"] = $this->uri->segment(1);
if(isset($_SESSION["user"]))
    $data["user"] = $_SESSION["user"];
if(isset($_SESSION["timkiem"]))
    $data['timkiem'] = $_SESSION["timkiem"];

    
$this->parser->parse('layouts/Vheader', $data);
$this->parser->parse($template, $data);
$this->parser->parse('layouts/Vfooter', $data);
