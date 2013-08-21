<?php
/**
 * @desc   删除文件
 * @author laserji
 * @mail   jiguang1984#gmail.com
 * @date   13-8-21
 */

$file = $_POST['file'];
if($file != ''){
    echo unlink('upload/'.$file);
}