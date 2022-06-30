<?php
$data['url']  = base_url();
$data['currentUrl'] = str_replace(base_url(), '', current_url());
$data['session'] = getSession();
$user = $this->session->userdata('user');
if(!empty($user)){
    $data['listmenu'] = layChucNang($user['quyen'], $user['username']);
    // pr($data['listmenu']);
}
// pr($data['listmenu']);
$this->parser->parse('layouts/Vheader', $data);
$this->parser->parse($template, $data);
$this->parser->parse('layouts/Vfooter', $data);
