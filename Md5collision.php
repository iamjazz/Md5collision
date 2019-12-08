<?php 
function  readmyfile($path){
    $fh = fopen($path, "rb");
    $data = fread($fh, filesize($path));
    fclose($fh);
    return $data;
}
echo '二进制hash '. md5( (readmyfile("1.txt")));
echo "<br><br>\r\n";
echo  'URLENCODE '. urlencode(readmyfile("1.txt"));
echo "<br><br>\r\n";
echo 'URLENCODE hash '.md5(urlencode (readmyfile("1.txt")));
echo "<br><br>\r\n";
echo '二进制hash '.md5( (readmyfile("2.txt")));
echo "<br><br>\r\n";
echo  'URLENCODE '.  urlencode(readmyfile("2.txt"));
echo "<br><br>\r\n";
echo 'URLENCODE hash '.md5( urlencode(readmyfile("2.txt")));
echo "<br><br>\r\n";
if($_POST['param1']!==$_POST['param2'] && md5($_POST['param1'])===md5($_POST['param2'])){
    die("success!");
}