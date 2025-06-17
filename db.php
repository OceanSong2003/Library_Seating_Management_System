<?php
// 数据库配置
$host = 'localhost';
$dbname = 'lsms';
$username = 'admin';
$password = '123456';

try {
    // 创建 PDO 实例
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
     echo "数据库连接成功！";
} catch (PDOException $e) {
    // 连接失败时的处理
    echo "数据库连接失败: " . $e->getMessage();
    exit;
}
?>
