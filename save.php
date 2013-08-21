<?php
/**
 * @desc   保存图片
 * @author laserji
 * @mail   jiguang1984#gmail.com
 * @date   13-8-20
 */

$data = $_POST['data'];
if($data != ''){
    $data = str_replace(' ','+',$data);
    $data = preg_replace('/^data:image\/(png|jpg);base64,/','',$data);
    $data = base64_decode($data);

    $filename = date('Ym').'-'.rand(10,10000);
    file_put_contents('upload/'.$filename.'.png', $data);

    echo 'http://ecd.ecc.com/laserji/qp/upload/'.$filename.'.png';
}