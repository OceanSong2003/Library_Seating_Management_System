<?php
session_start();
// 初始化验证码字符串为空
$codetext = "";
// 生成两位随机数字
$digit1 = rand(0, 9);
$digit2 = rand(0, 9);
// 构建两对相同的数字（例如：1212、3434）
$codetext = $digit1 . $digit2 . $digit1 . $digit2;
// 将验证码存入session
$_SESSION["codetext"] = $codetext;
// 创建画布，并设置背景色为白色
$image = imagecreatetruecolor(100, 30);
$white = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $white);
// 画少量干扰线，降低复杂度
for ($i = 0; $i < 5; $i++) {
    $color = imagecolorallocate($image, rand(180, 255), rand(180, 255), rand(180, 255));
    imageline($image, rand(0, 100), rand(0, 30), rand(0, 100), rand(0, 30), $color);
}
// 输出字符串，调整字体大小和位置
$black = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 5, 20, 10, $codetext, $black);
// 输出图像
header("Content-type:image/png");
imagepng($image);
// 销毁图像
imagedestroy($image);
?>
